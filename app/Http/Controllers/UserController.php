<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
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
            'password' => 'required|min:8'
        ]);
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'ID_NO' => $fields['ID_NO'],
            'phone' => $fields['phone'],
            'user_type' => 'USR',
            'image' => $fields['image'],
            'password' => Hash::make($fields['password'])
        ]);
        $user->assignRole('USR');

        $token = $user->createToken('myapptoken')->plainTextToken;

        return [
            'message' => 'user registered',
            'user' => $user,
            'token' => $token
        ];
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
            'user_type' => 'nullable',
            'image' => 'image|mimes:jpeg,jpg,png|nullable',
            'password' => 'required|min:8'
        ]);
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'ID_NO' => $fields['ID_NO'],
            'phone' => $fields['phone'],
            'user_type' => 'ADM',
            'image' => $fields['image'],
            'password' => Hash::make($fields['password'])
        ]);
        $user->assignRole('ADM');

        $token = $user->createToken('myapptoken')->plainTextToken;

        return [
            'message' => 'admin registered',
            'user' => $user,
            'token' => $token
        ];
    }
    /**
     * User update
     */
    public function update_role(Request $request, $email)
    {
        $fields = $request->validate([
            'user_type' => 'required|string',
        ]);
        $current_user = User::find(auth()->user()->id);

        if ($current_user->hasRole('ADM')) {
            $user = User::where('email', $email)->first();

            if ($user) {
                $user->removeRole($user->roles->first());
                $user->assignRole($fields['user_type']);
                $user->user_type = $fields['user_type'];
                $user->update();

                return [
                    'message' => 'user role updated',
                    'user' => $user
                ];
            } else {
                return [
                    'message' => 'user not found',
                    'user' => null
                ];
            }
        } else {
            return ['message', 'unauthorised for this action'];
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
        $user = User::where('email', $fields['email'])->first();
        if (!$user || !Hash::check($fields['password'], $user->password)) {
            return [
                'message' => 'invalid credentials'
            ];
        }

        $token = $user->createToken('myapptoken')->plainTextToken;

        return [
            'message' => 'user logged in',
            'token' => $token
        ];
    }
    public function logout(Request $request)
    {
        $user = User::find(auth()->user()->id);

        if ($user->can('user:logout')) {
            $request->user()->currentAccessToken()->delete();
            return ['message' => 'user logged out'];
        } else {
            return ['message' => 'unauthorised'];
        }
    }
}
