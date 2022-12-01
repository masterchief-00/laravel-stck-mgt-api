<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;
use CloudinaryLabs\CloudinaryLaravel\Facades\Cloudinary;


class UserController extends Controller
{
    public function index(Request $request)
    {
        $users = User::all();

        return view('users.users', compact('users'));
    }

    public function admin_add()
    {
        $roles = Role::all();

        return view('users.add_admin', compact('roles'));
    }
    public function role_new()
    {
        $roles = Role::all();

        return view('users.authority', compact('roles'));
    }
    /**
     * user registration
     */
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'ID_NO' => 'required|unique:users,ID_NO',
            'phone' => 'required|unique:users,phone',
            'user_type' => 'nullable',
            'image' => 'image|mimes:jpeg,jpg,png|nullable',
            'password' => 'required|min:8|confirmed'
        ]);
        $is_api_request = $request->route()->getPrefix() === 'api';

        $user = new User();
        $user->name = $fields['name'];
        $user->email = $fields['email'];
        $user->ID_NO = $fields['ID_NO'];
        $user->phone = $fields['phone'];
        $user->user_type = 'USR';
        $user->password = Hash::make($fields['password']);

        $image__url = Cloudinary::upload($fields['image']->getRealPath())->getSecurePath();

        $user->image = $image__url;

        $user->assignRole('USR');

        $user->save();

        if ($is_api_request) {
            $token = $user->createToken('myapptoken')->plainTextToken;

            return [
                'message' => 'user registered',
                'user' => $user,
                'token' => $token
            ];
        } else {
            $request->session()->regenerate();
            Auth::login($user);
            return redirect()->intended('/');
        }
    }
    /**
     * admin registration...for testing purposes
     */
    public function register_admin(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'ID_NO' => 'required|unique:users,ID_NO',
            'phone' => 'required|unique:users,phone',
            'user_type' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|nullable',
        ]);

        $is_api_request = $request->route()->getPrefix() === 'api';

        if ($request->user()->hasRole('ADM')) {
            $user = User::create([
                'name' => $fields['name'],
                'email' => $fields['email'],
                'ID_NO' => $fields['ID_NO'],
                'phone' => $fields['phone'],
                'user_type' => $fields['user_type'],
                'image' => $fields['image'],
                'password' => Hash::make('12345678')
            ]);
            $user->assignRole($fields['user_type']);

            if ($is_api_request) {
                $token = $user->createToken('myapptoken')->plainTextToken;

                return [
                    'message' => 'admin registered',
                    'user' => $user,
                    'token' => $token
                ];
            } else {
                return redirect()->back()->with('message', 'User registered');
            }
        } else {
            if ($is_api_request) {
                return [
                    'message' => 'Unauthorised for this action',

                ];
            } else {
                return redirect()->back()->with('message', 'Not authorised for this action');
            }
        }
    }

    public function update_role(Request $request, $email = null)
    {
        $fields = $request->validate([
            'user_type' => 'required|string',
            'email' => 'nullable'
        ]);
        $is_api_request = $request->route()->getPrefix() === 'api';
        $current_user = User::find(auth()->user()->id);


        if ($current_user->hasRole('ADM')) {
            $user = User::where('email', $is_api_request ? $email : $fields['email'])->first();

            if ($user) {
                $user->removeRole($user->roles->first());
                $user->assignRole($fields['user_type']);
                $user->user_type = $fields['user_type'];
                $user->update();

                if ($is_api_request) {
                    return [
                        'message' => 'user role updated',
                        'user' => $user
                    ];
                } else {
                    return back()->with('message', 'user role updated');
                }
            } else {

                if ($is_api_request) {
                    return [
                        'message' => 'user not found',
                        'user' => null
                    ];
                } else {
                    return back()->withErrors(
                        ['message' => 'The provided credentials do not match our records.']
                    );
                }
            }
        } else {
            if ($is_api_request) {
                return ['message', 'unauthorised for this action'];
            } else {
                return back()->withErrors(['message' => 'unauthorised for this action']);
            }
        }
    }


    public function update(Request $request)
    {
        $fields = $request->validate([
            'name' => 'string|nullable',
            'password' => 'min:8|confirmed|nullable',
            'image' => 'image|mimes:png,jpg,jpeg|nullable'
        ]);

        $is_api_request = $request->route()->getPrefix() === 'api';

        $user = User::find($request->user()->id);

        if ($fields['name'] != null) {
            $user->name = $fields['name'];
        }

        if ($fields['password'] != null) {
            $user->password = Hash::make($fields['password']);
        }

        if (isset($fields['image']) && $fields['image'] != null) {
            $image__url = Cloudinary::upload($fields['image']->getRealPath())->getSecurePath();

            $user->image = $image__url;
        }

        $user->update();

        if ($is_api_request) {
            return [
                'message' => 'user updated!',
                'user' => $user
            ];
        } else {
            return redirect()->back()->with('message', 'User update!');
        }
    }
    /**
     * User login
     */
    public function login(Request $request)
    {
        $fields = $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);
        $is_api_request = $request->route()->getPrefix() === 'api';

        $user = User::where('email', $fields['email'])->first();
        if (!$user || !Hash::check($fields['password'], $user->password)) {

            if ($is_api_request) {
                return [
                    'message' => 'invalid credentials'
                ];
            } else {
                return back()->withErrors([
                    'message' => 'The provided credentials do not match our records.'
                ]);
            }
        }

        if ($is_api_request) {

            $token = $user->createToken('myapptoken')->plainTextToken;
            $user_permissions = $user->getAllPermissions();
            $categories = Category::all();

            return [
                'message' => 'user logged in',
                'token' => $token,
                'user' => $user,
                'permissions' => $user_permissions,
                'categories' => $categories
            ];
        } else {
            $request->session()->regenerate();
            Auth::login($user);
            return redirect()->intended('/');
        }
    }
    public function logout(Request $request)
    {
        $user = User::find(auth()->user()->id);
        $is_api_request = $request->route()->getPrefix() === 'api';

        if ($is_api_request) {
            if ($user->can('user:logout')) {
                $request->user()->currentAccessToken()->delete();
                return ['message' => 'user logged out'];
            } else {
                return ['message' => 'unauthorised'];
            }
        } else {
            Auth::logout();

            $request->session()->invalidate();

            $request->session()->regenerateToken();

            return redirect('/login');
        }
    }

    public function show(Request $request)
    {
        $fields = $request->validate([
            'query' => 'required|string'
        ]);

        $results = User::where('name', 'like', $fields['query'] . '%')
            ->orWhere('email', 'like', $fields['query'] . '%')->get();

        return redirect()->route('authority.render')->with(['results' => $results]);
    }
}
