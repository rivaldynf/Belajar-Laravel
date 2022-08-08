<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('login.index', [
            'title' => 'Login',
            "active" => 'login'

        ]); 
        
    }

    // authenticate
    public function authenticate(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required|email:dns',
            'password' => 'required'
        ]);

        // Dokumentasi Laravel authentication = https://laravel.com/docs/8.x/authentication#introduction
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect()->intended('/dashboard');
        }

        return back()->with('loginError', 'Login Gagal!'); // pesan eror
    }

    // https://laravel.com/docs/8.x/authentication
    public function logout()
    {
        Auth::logout();

        request->session()->invalidate();

        request->session()->regenerateToken();

        return redirect('/');
    }



}
