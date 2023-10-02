<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;
use Ramsey\Uuid\Type\Integer;

class AuthController extends Controller
{
    protected function attemptLoginOrFail(Request $request)
    {
        if (!Auth::attempt($request->only('email', 'password')))
            throw ValidationException::withMessages([
                'email' => ['البريد الإلكتروني أو كلمة المرور غير صحيحة'],
            ]);
    }

    public function login(Request $request, $role)
    {
        $request->validate([
            'email' => 'required|string|email|max:255',
            'password' => 'required|min:8|max:255',
        ]);

        $this->attemptLoginOrFail($request);
        return response()->json([
            'auth_token' => Auth::user()->createToken('auth_token')->plainTextToken,
        ]);
    }

    public function register(Request $request, $role = User::ROLE_CUSTOMER)
    {
        $request->validate([
            // DEBUG:commented 'name' => 'required|string|max:255|regex:/^[\p{L}\s\'-]+$/u',
            'name' => 'required|string|max:255', // DEBUG: wrote
            'email' => 'required|string|email|unique:users|max:255',
            'password' => 'required|min:8|max:255|confirmed'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $role,
        ]);

        $this->attemptLoginOrFail($request);
        return response()->json([
            'auth_token' => Auth::user()->createToken('auth_token')->plainTextToken,
        ], 201);
    }

    public function logout()
    {
        // Revoke the user's token abilities
        Auth::user()->tokens()->delete();

        return response()->json([
            'message' => 'تم تسجيل الخروج بنجاح'
        ]);
    }

    //-------------------------------------------------------------------------------------------------------------------------
    // Delivery User's Methods

    public function deliveryRegister(Request $request)
    {
        $this->register($request, User::ROLE_DELIVERY_PERSON);
    }

    public function deliveryLogin(Request $request)
    {
        $this->login($request, User::ROLE_DELIVERY_PERSON);
    }
}
