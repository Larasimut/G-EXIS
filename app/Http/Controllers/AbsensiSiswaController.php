<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;

class AbsensiSiswaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'kehadiran' => 'required',
            'keterangan' => 'nullable|string',
            'foto' => 'required' // base64 dari kamera
        ]);

        // simpan foto ke storage
        $image = $request->foto;
        $image = str_replace('data:image/png;base64,', '', $image);
        $image = str_replace(' ', '+', $image);
        $imageName = 'absen_' . time() . '.png';
        \Storage::disk('public')->put('absensi/' . $imageName, base64_decode($image));

        // simpan ke DB
        Absensi::create([
            'kehadiran' => $request->kehadiran,
            'keterangan' => $request->keterangan,
            'foto' => 'absensi/' . $imageName,
            'user_id' => auth()->id(), // kalau pakai auth
        ]);

        return response()->json(['status' => 'success']);
    }
}
