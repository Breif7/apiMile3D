<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use App\Models\User;
use Laravel\Sanctum\PersonalAccessToken;

class AuthController extends Controller
{
        public function login(Request $request)
    {
        Log::info('Login attempt', $request->only('email'));

        $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);

        if (Auth::attempt($credentials)) {
            $user = Auth::user();
            $token = $user->createToken('authToken')->plainTextToken;
            Log::info('Inicio de sesion exitoso');

            return response()->json([
                'message' => 'Logged in successfully',
                'token' => $token,
                'user' => [
                    'name' => $user->name,
                    'email' => $user->email,
                ]
            ]);
        }

        return response()->json(['error' => 'The provided credentials do not match our records.'], 401);
    }

        public function logout(Request $request)
            {
                $user = $request->user();

                if ($user) {
                    $user->tokens()->delete();
                    return response()->json(['message' => 'Successfully logged out']);
                } else {
                    return response()->json(['error' => 'No authenticated user'], 401);
                }
            }

}
