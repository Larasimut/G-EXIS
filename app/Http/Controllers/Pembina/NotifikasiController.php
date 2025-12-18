<?php

namespace App\Http\Controllers\Pembina;
  use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotifikasiController extends Controller
{
    // =============================
    // TAMPIL RIWAYAT NOTIFIKASI
    // =============================
    public function index()
    {
        $notifikasi = Notification::where('role', 'siswa')
            ->latest()
            ->get();

        return view('pembina.notifikasi', compact('notifikasi'));
    }

    // =============================
    // SIMPAN NOTIFIKASI BARU
    // =============================

public function store(Request $request)
{
    $request->validate([
        'pesan' => 'required|string'
    ]);

    Notification::create([
        'pesan'          => $request->pesan,
        'role'           => 'siswa',
        'pengirim_id'    => Auth::id(),
        'pengirim_nama'  => Auth::user()->name,
        'ekskul'         => Auth::user()->ekskul // contoh: basket, paskibra
    ]);

    return back()->with('success', 'Notifikasi berhasil dikirim!');
}

    // =============================
    // FORM EDIT NOTIFIKASI
    // =============================
    public function edit($id)
    {
        $notifikasi = Notification::findOrFail($id);
        return view('pembina.notifikasi_edit', compact('notifikasi'));
    }

    // =============================
    // UPDATE NOTIFIKASI
    // =============================
    public function update(Request $request, $id)
    {
        $request->validate([
            'pesan' => 'required|string'
        ]);

        $notifikasi = Notification::findOrFail($id);
        $notifikasi->update([
            'pesan' => $request->pesan
        ]);

        return redirect()
            ->route('pembina.notifikasi')
            ->with('success', 'Notifikasi berhasil diperbarui');
    }

    // =============================
    // HAPUS NOTIFIKASI
    // =============================
    public function destroy($id)
    {
        Notification::findOrFail($id)->delete();

        return back()->with('success', 'Notifikasi berhasil dihapus');
    }
}
