<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function showLogin()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {

            $user = Auth::user();

            if ($user->role === 'pengelola') {
                return redirect('/dashboard');
            } else {
                return redirect('/');
            }

        }

        return back()->with('error', 'Email atau password salah ❌');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
