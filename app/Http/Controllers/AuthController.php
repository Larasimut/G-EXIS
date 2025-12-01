<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function showLogin(){
        return view('auth.login');
    }

    public function loginProcess(Request $request){
        return "Login Berhasil!";
    }

    public function showRegister(){
        return view('auth.register');
    }

    public function registerProcess(Request $request){
        return "Register Berhasil!";
    }

public function logout()
{
    Auth::logout();
    return redirect('/login')->with('success', 'Berhasil logout!');
}
}
