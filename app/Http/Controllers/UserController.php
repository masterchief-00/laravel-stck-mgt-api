<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function register(Request $request)
    {
        $fields = $request->validate([
            'name' => 'required|string',
            'email' => 'required|email|unique:users,email',
            'ID_NO' => 'required|unique:users,ID_NO',
            'phone' => 'required|unique:users,users',
            'user_type' => 'required',
            'image' => 'image|mimes:jpeg,jpg,png|nullable',
            'password' => 'required'
        ]);
        $user = User::create([
            'name' => $fields['name'],
            'email' => $fields['email'],
            'ID_NO' => $fields['ID_NO'],
            'phone' => $fields['phone'],
            'user_type' => $fields['user_type'],
            'image' => $fields['image'],
            'password' => Hash::make($fields['password'])
        ]);

        $token = $user->createToken('myapptoken')->plainTextToken;

        return [
            'message' => 'user registered',
            'product' => $user,
            'token' => $token
        ];
    }
}
