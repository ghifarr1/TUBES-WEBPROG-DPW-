<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
 
class LoginController extends Controller
{

    public function loginPage(){
        return view('login.loginPage');
    }

    /**
     * Handle an authentication attempt.a
     */
    public function login(Request $request)
    {
        // Validasi input
        $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required|string',
        ]);

        $credentials = $request->only('email', 'password');

        // Attempt to log the user in
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            // Authentication passed, redirect to intended page
            return redirect()->intended('dashboard');
        }

        // Authentication failed, redirect back with an error message
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request){
        Auth::logout();
 
        $request->session()->invalidate();
     
        $request->session()->regenerateToken();
     
        return redirect('/');
    }
}

