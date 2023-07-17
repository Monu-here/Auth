<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function showLoginForm()
    {
        return view('login');
    }

    public function login(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->route('dashboard');
        }
        return back()->withErrors([
            'email' => 'Invalid email or password.',
        ])->withInput($request->except('password'));
        // return back()->withErrors([
        //     'email' => 'Invalid credentials.',
        // ]);
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
