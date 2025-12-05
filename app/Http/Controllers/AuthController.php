<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    // ======================
    // SHOW LOGIN PAGE
    // ======================
    public function showLogin()
    {
        return view('auth.login');
    }

    // ======================
    // LOGIN PROCESS
    // ======================
   public function loginProcess(Request $request)
{
    $request->validate([
        'email' => 'required',
        'password' => 'required'
    ]);

    // Coba login
    if (!Auth::attempt($request->only('email', 'password'))) {
        return back()->withErrors([
            'login' => 'Email atau password salah!'
        ]);
    }

    $user = Auth::user(); // Ambil data user yang login

    // Redirect berdasarkan role
    if ($user->role === 'siswa') {
        return redirect()->route('siswa.beranda');
    }

    if ($user->role === 'pembina') {
        return redirect()->route('pembina.beranda');
    }

    if ($user->role === 'admin') {
        return redirect()->route('admin.dashboard');
    }

    // fallback kalau role tidak dikenali
    return redirect('/login')->withErrors(['login' => 'Role tidak valid!']);
}


    // ======================
    // SHOW REGISTER PAGE
    // ======================
    public function showRegister()
    {
        return view('auth.register');
    }

    // ======================
    // REGISTER PROCESS
    // ======================
    public function registerProcess(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|min:5'
        ]);

        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => 'siswa'
        ]);

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login!');
    }

    // ======================
    // LOGOUT
    // ======================
    public function logout()
    {
        Auth::logout();
        return redirect('/login')->with('success', 'Berhasil logout!');
    }
}
