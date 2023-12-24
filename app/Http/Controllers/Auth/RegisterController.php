<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Database\QueryException;
use App\Http\Controllers\Controller;


class RegisterController extends Controller
{
    public function register(Request $request)
    {
        Log::info('Register attempt', $request->all());

        // Define las reglas de validación
        $rules = [
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:6',
        ];

        $validator = Validator::make($request->all(), $rules);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }
        try {
            $validatedData = $validator->validated();

            Log::info('Validation', $validatedData);
            
            $user = new User();
            $user->name = $validatedData['name'];
            $user->email = $validatedData['email'];
            $user->password = Hash::make($validatedData['password']);
            
            $user->save();

            Log::info('User successfully registered', ['user_id' => $user->id, 'email' => $user->email]);

            return response()->json(['message' => 'User successfully registered', 'user' => $user]);
        } catch (QueryException $e) {
            Log::error('User register failed', ['error' => $e->getMessage()]);
            return response()->json(['message' => 'User register failed'], 500);
        }
    }
}
