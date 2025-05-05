<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    // Show the signup form
    public function showSignupForm()
    {
        return view('signup');
    }

    // Handle signup POST
    public function signup(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'phone' => 'required|string|max:20',
            'password' => 'required|string|min:8|confirmed',
        ]);

        $user = User::create([
            'name' => $validated['name'],
            'email' => $validated['email'],
            'phone' => $validated['phone'],
            'password' => Hash::make($validated['password']),
            'is_admin' => false, // New users are always regular users
        ]);

        Auth::login($user);

        return redirect('/');
    }

    // Show the login form
    public function showLoginForm()
    {
        return view('login');
    }

    // Handle login POST
    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
            'user_type' => 'required|in:user,admin',
        ]);

        if (Auth::attempt(['email' => $credentials['email'], 'password' => $credentials['password']])) {
            $user = Auth::user();
            
            // Check if user is trying to login as admin
            if ($credentials['user_type'] === 'admin') {
                if (!$user->is_admin) {
                    Auth::logout();
                    return back()->withErrors([
                        'user_type' => 'You are not authorized to login as admin.',
                    ]);
                }
            }

            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    // Handle logout POST
    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
