<?php

namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use Illuminate\Http\Request;

class KonfirmasiPendaftaranController extends Controller
{
    // ======================================
    // HALAMAN KONFIRMASI PENDAFTARAN (SEMUA TAB)
    // ======================================
    public function index()
    {
        $ekskulPembina = auth()->user()->ekskul;

        // TAB PENDING
        $pending = Pendaftar::where('ekskul', $ekskulPembina)
            ->where('status', 'pending')
            ->get();

        // TAB DITERIMA (anggota aktif, belum keluar)
        $diterima = Pendaftar::where('ekskul', $ekskulPembina)
            ->where('status', 'diterima')
            ->whereNull('status_keluar')
            ->get();

        // TAB DITOLAK
        $ditolak = Pendaftar::where('ekskul', $ekskulPembina)
            ->where('status', 'ditolak')
            ->get();

        // TAB KELUAR (hasil tombol keluar)
        $keluar = Pendaftar::where('ekskul', $ekskulPembina)
            ->where('status_keluar', 'keluar')
            ->get();

        return view('pembina.konfirmasi_pendaftaran', compact(
            'pending',
            'diterima',
            'ditolak',
            'keluar'
        ));
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

    // ======================================
    // SETUJUI PERMINTAAN KELUAR (opsional / future)
    // ======================================
    public function setujuiKeluar($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->status_keluar = 'disetujui';
        $pendaftar->save();

        return back()->with('success', 'Permintaan keluar disetujui.');
    }

    // ======================================
    // TOLAK PERMINTAAN KELUAR (opsional / future)
    // ======================================
    public function tolakKeluar($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);
        $pendaftar->status_keluar = 'ditolak';
        $pendaftar->save();

        return back()->with('success', 'Permintaan keluar ditolak.');
    }

    // ======================================
    // KELUARKAN ANGGOTA (PINDAH KE TAB KELUAR)
    // ======================================
    public function keluar($id)
    {
        $pendaftar = Pendaftar::findOrFail($id);

        // tandai sebagai keluar
        $pendaftar->status_keluar = 'keluar';
        $pendaftar->save();

        return back()->with('success', 'Anggota berhasil dipindahkan ke tab keluar');
    }
}
