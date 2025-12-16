<?php

namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class KonfirmasiPendaftaranController extends Controller
{
    // ======================================
    // TAMPILKAN PENDAFTAR (PENDING, DITERIMA, DITOLAK)
    // ======================================
    public function index()
    {
        $ekskulPembina = auth()->user()->ekskul;

        $pending = Pendaftar::where('ekskul', $ekskulPembina)
                    ->where('status', 'pending')
                    ->get();

        $diterima = Pendaftar::where('ekskul', $ekskulPembina)
                    ->where('status', 'diterima')
                    ->get();

        $ditolak = Pendaftar::where('ekskul', $ekskulPembina)
                    ->where('status', 'ditolak')
                    ->get();

       return view('pembina.konfirmasi_pendaftaran', compact('pending', 'diterima', 'ditolak'));

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
