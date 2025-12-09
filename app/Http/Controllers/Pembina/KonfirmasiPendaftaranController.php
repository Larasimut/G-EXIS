<?php

namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class KonfirmasiPendaftaranController extends Controller
{
    // ======================================
    // TAMPILKAN PENDAFTAR SESUAI PEMBINA
    // ======================================
  public function index()
{
    $ekskulPembina = auth()->user()->ekskul;

    $data = Pendaftar::where('ekskul', $ekskulPembina)
                     ->where('status', 'pending')
                     ->get();

    return view('pembina.konfirmasi_pendaftaran', compact('data'));
}



    // ======================================
    // TERIMA PENDAFTAR
    // ======================================
    public function terima($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->status = 'diterima';
        $pendaftar->save();

        return back()->with('success', 'Pendaftar berhasil diterima!');
    }

    // ======================================
    // TOLAK PENDAFTAR
    // ======================================
    public function tolak($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->status = 'ditolak';
        $pendaftar->save();

        return back()->with('success', 'Pendaftar berhasil ditolak!');
    }

}
