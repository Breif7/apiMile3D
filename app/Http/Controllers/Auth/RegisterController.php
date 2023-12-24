<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ]);

        
        $user = User::create([
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']),
        ]);

        Log::info('User successfully registered', ['user_id' => $user->id, 'email' => $user->email]);

        return response()->json(['message' => 'User successfully registered', 'user' => $user]);
            }
}
