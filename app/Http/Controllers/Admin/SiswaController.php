<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;   // ← model user

class SiswaController extends Controller
{
    // LIST DATA (ambil dari database)
    public function index()
    {
        // ambil hanya user yang rolenya 'siswa'
        $siswa = User::where('role', 'siswa')->get(); 

        return view('admin.data_siswa', compact('siswa'));
    }

    // FORM TAMBAH
    public function create()
    {
        return view('admin.siswa_create');
    }

    // SIMPAN DATA
    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'siswa'
        ]);

        return redirect()->route('admin.data_siswa')
            ->with('success', 'Siswa berhasil ditambahkan.');
    }

    // FORM EDIT
    public function edit($id)
    {
        $siswa = User::findOrFail($id);

        return view('admin.siswa_edit', compact('siswa'));
    }

    // UPDATE DATA
    public function update(Request $request, $id)
    {
        $siswa = User::findOrFail($id);

        $siswa->update([
            'username' => $request->username,
            'email' => $request->email,
        ]);

        // kalau password diisi, update password
        if ($request->password) {
            $siswa->update([
                'password' => bcrypt($request->password),
            ]);
        }

        return redirect()->route('admin.data_siswa')
            ->with('success', 'Data siswa berhasil diperbarui.');
    }

    // DELETE
    public function destroy($id)
    {
        User::findOrFail($id)->delete();

        return redirect()->route('admin.data_siswa')
            ->with('success', 'Siswa berhasil dihapus.');
    }
}
