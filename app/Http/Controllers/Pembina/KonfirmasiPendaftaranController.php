<?php

namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class KonfirmasiPendaftaranController extends Controller
{
    // Tampilkan semua pendaftar
    public function index()
    {
        $data = Pendaftar::where('status', 'pending')->get();
        return view('pembina.konfirmasi_pendaftaran', compact('data'));
    }

    // Terima pendaftar
    public function terima($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->status = 'diterima';
        $pendaftar->save();

        return back()->with('success', 'Pendaftar berhasil diterima!');
    }

    // Tolak pendaftar
    public function tolak($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->status = 'ditolak';
        $pendaftar->save();

        return back()->with('success', 'Pendaftar berhasil ditolak.');
    }
}
