<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Customer;
use App\Http\Requests\LoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    public function signup(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'is_admin' => 'boolean',
        ]);

        $user = User::create([
            'username' => $validatedData['username'],
            'email' => $validatedData['email'],
            'password' => Hash::make($validatedData['password']), 
            'is_admin' => $validatedData['is_admin'] ?? false,
        ]);
        return redirect()->route('register');
    }

    public function register(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required',
        ]);

        $user = Auth::user();
        
        if (!$user->customer) {
            Customer::create([
                'user_id' => $user->id,
                'name' => $request->name,
                'address' => $request->address,
                'phone' => $request->phone,
            ]);
        }

        return redirect()->route('home');
    }

    public function login(Request $request): RedirectResponse
    {
        $credentials = $request->validate([
            'username' => 'required',
            'password' => 'required', 
        ]);

        if (Auth::attempt($credentials, $request->boolean('remember'))) {
            $request->session()->regenerate();
            return redirect()->intended('home');
        }

        return back()->withErrors([
            'login' => 'The provided credentials are incorrect.'
        ])->onlyInput();
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}