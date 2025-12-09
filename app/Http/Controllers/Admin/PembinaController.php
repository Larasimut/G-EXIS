<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;

class PembinaController extends Controller
{
    public function index()
    {
        $pembina = User::where('role', 'pembina')->get();
        return view('admin.data_pembina', compact('pembina'));
    }

    public function create()
    {
        return view('admin.create_pembina');
    }

    public function store(Request $request)
    {
        User::create([
            'username' => $request->username,
            'email' => $request->email,
            'password' => bcrypt($request->password),
            'role' => 'pembina',
            'kode_pembina' => $request->kode_pembina,
        ]);

        return redirect()->route('admin.pembina.index')->with('success', 'Pembina berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $pembina = User::findOrFail($id);
        return view('admin.edit_pembina', compact('pembina'));
    }

    public function update(Request $request, $id)
    {
        $pembina = User::findOrFail($id);
        $pembina->update($request->all());

        return redirect()->route('admin.pembina.index')->with('success', 'Data pembina berhasil diperbarui.');
    }

    public function destroy($id)
    {
        User::findOrFail($id)->delete();
        return redirect()->route('admin.pembina.index')->with('success', 'Pembina dihapus.');
    }
}
