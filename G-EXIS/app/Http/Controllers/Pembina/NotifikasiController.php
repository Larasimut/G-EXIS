<?php

namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Notification;

class NotifikasiController extends Controller
{
    public function index()
    {
        // Menampilkan daftar notifikasi yang pernah dibuat
        $notifikasi = Notification::where('role', 'siswa')->latest()->get();

        return view('pembina.notifikasi', compact('notifikasi'));
    }

   public function store(Request $request)
{
    $request->validate([
        'pesan' => 'required|string'
    ]);

    Notification::create([
        'pesan' => $request->pesan,   // ← gunakan kolom yang benar
        'role'  => 'siswa'
    ]);

    return back()->with('success', 'Notifikasi berhasil dikirim!');
}
}
