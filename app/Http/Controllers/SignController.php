<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class SignController extends Controller
{
    public function index()
    {
        return view('sign.in');
    }

    public function auth(Request $request)
    {
        // Validate the input
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
    
        // Gather credentials as an array
        $credentials = $request->only('email', 'password');
    
        // Attempt to authenticate the user
        if (Auth::attempt($credentials)) {
            // Regenerate the session to avoid session fixation attacks
            $request->session()->regenerate();
    
            // If successful, redirect to the dashboard
            return redirect('dashboard');
        } else {
            // If authentication fails, flash an error message
            Session::flash('error', 'Email atau Password Salah');
            return redirect('/')->withInput();
        }
    }
    

    public function destroy(Request $request)
    {
        Auth::logout();
        return redirect('/');
    }
}
