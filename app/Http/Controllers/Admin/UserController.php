<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    // =============================
    // LIST PEMBINA & SISWA
    // =============================
    public function index()
    {
        $users = User::whereIn('role', ['pembina', 'siswa'])->get();
        return view('admin.data_pembina', compact('users'));
    }

    // =============================
    // FORM TAMBAH USER
    // =============================
    public function create()
    {
        return view('admin.create_pembina');
    }

    // =============================
    // SIMPAN USER
    // =============================
    public function store(Request $request)
    {
        $request->validate([
            'name'     => 'required|string|max:255',
            'email'    => 'required|email|unique:users,email',
            'role'     => 'required|in:pembina,siswa',
            'password' => 'required|min:6',
        ]);

        User::create([
            'name'     => $request->name,
            'email'    => $request->email,
            'role'     => $request->role,
            'password' => Hash::make($request->password),
        ]);

        return redirect()
            ->route('admin.users.index')
            ->with('success', 'User berhasil ditambahkan');
    }

    // =============================
    // HAPUS USER
    // =============================
    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return back()->with('success', 'User dihapus');
    }
    // =============================
// FORM EDIT USER
// =============================
public function edit($id)
{
    $user = User::findOrFail($id);
    return view('admin.edit_pembina', compact('user'));
}

}
