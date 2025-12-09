<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;
use App\Models\Pendaftaran;

class PendaftaranController extends Controller
{
    // Simpan data form
    public function store(Request $request)
    {
        $request->validate([

            'nama'   => 'required',
            'kelas'  => 'required',
            'ekskul' => 'required',
            'alasan' => 'required',
            'kontak' => 'required',
        ]);

       Pendaftar::create([
    'user_id' => auth()->user()->id,
    'nama' => auth()->user()->name,
    'kelas' => $request->kelas,
    'ekskul' => $request->ekskul,
    'alasan' => $request->alasan,
    'kontak' => $request->kontak,
    'status' => 'pending',
]);


        return back()->with('success', 'Pendaftaran berhasil dikirim!');
    }


    // Halaman pembina melihat data
    public function indexPembina()
    {
        $data = Pendaftar::all(); // gunakan model Pendaftar
        return view('pembina.konfirmasi_pendaftaran', compact('data'));
    }


    // Konfirmasi
    public function konfirmasi($id)
    {
        Pendaftar::where('id', $id)->update(['status' => 'diterima']);
        return back()->with('success', 'Pendaftar diterima');
    }


    // Tolak
    public function tolak($id)
    {
        Pendaftar::where('id', $id)->update(['status' => 'ditolak']);
        return back()->with('success', 'Pendaftar ditolak');
    }
}
