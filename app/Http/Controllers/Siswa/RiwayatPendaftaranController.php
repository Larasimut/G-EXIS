<?php

namespace App\Http\Controllers\Siswa;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;

class RiwayatPendaftaranController extends Controller
{
    public function index()
    {
        // ambil semua pendaftaran milik siswa ini
        $pendaftar = Pendaftar::where('nama', auth()->user()->username)->get();

        return view('siswa.riwayat', compact('pendaftar'));
    }
}
