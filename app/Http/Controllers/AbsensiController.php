<?php

namespace App\Http\Controllers;

use App\Models\Absensi;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class AbsensiController extends Controller
{
    public function index()
    {
        return view('siswa.absensi');
    }

    public function store(Request $request)
    {
        $request->validate([
            'kehadiran'  => 'required',
            'keterangan' => 'nullable',
        ]);

        $user = Auth::user();
        $pendaftar = Pendaftar::where('user_id', $user->id)
    ->where('id', $request->pendaftar_id)
    ->first();

if (!$pendaftar) {
    return back()->with('error', 'Ekskul tidak ditemukan. Hubungi admin!');
}

        if (!$pendaftar) {
            // Jika request dari kamera (AJAX)
            if ($request->ajax()) {
                return response()->json([
                    'status' => 'error',
                    'message' => 'Ekskul tidak ditemukan!'
                ], 400);
            }

            // Jika request dari form biasa
            return back()->with('error', 'Ekskul tidak ditemukan, hubungi admin!');
        }

        $fotoPath = null;

        // Jika ada foto base64 dari kamera
        if ($request->filled('foto')) {
            $fotoData = str_replace('data:image/png;base64,', '', $request->foto);
            $fotoData = str_replace(' ', '+', $fotoData);

            $fileName = uniqid('absen_') . '.png';
            Storage::disk('public')->put('absensi/' . $fileName, base64_decode($fotoData));
            $fotoPath = 'absensi/' . $fileName;
        }

        Absensi::create([
    'user_id'    => Auth::id(),
    'nama'       => Auth::user()->name,
    'ekskul'     => $pendaftar->ekskul,
    'kehadiran'  => $request->kehadiran,
    'keterangan' => $request->keterangan,
    'foto'       => $fotoPath,
]);



        // Response jika AJAX
        if ($request->ajax()) {
            return response()->json([
                'status' => 'success',
                'message' => 'Absensi berhasil dikirim!'
            ]);
        }

        // Response jika form biasa
        return redirect()->back()->with('success', 'Absensi berhasil dikirim!');
    }
}
