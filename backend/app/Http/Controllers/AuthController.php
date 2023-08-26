<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class AuthController extends Controller
{
    protected function attemptOrFail(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
            throw ValidationException::withMessages([
                'email' => ['The provided credentials are incorrect.'],
            ]);
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $this->attemptOrFail($request);
        return response()->json([
            'auth_token' => Auth::user()->createToken('auth_token')->plainTextToken,
        ]);
    }

    public function register(Request $request)
    {
        $request->validate([
            //? DEBUG:commented 'name' => 'required|string|max:255|/^[a-zA-Z]+(?:\s[a-zA-Z]+){0,2}$/',
            'name' => 'required|string|max:255', //? DEBUG:wrote
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|min:8|max:255|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $this->attemptOrFail($request);
        return response()->json([
            'auth_token' => Auth::user()->createToken('auth_token')->plainTextToken,
        ], 201);
    }

    public function logout()
    {
        Auth::logout();
    }
}
