<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Absensi;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
class AbsensiSiswaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'pendaftar_id' => 'required|exists:pendaftar,id',
            'kehadiran' => 'required',
            'foto' => 'required'
        ]);

        $user = Auth::user();

        $pendaftar = Pendaftar::where('id', $request->pendaftar_id)
            ->where('user_id', $user->id)
            ->firstOrFail();

        // SIMPAN FOTO
        $imageData = str_replace('data:image/png;base64,', '', $request->foto);
        $imageData = str_replace(' ', '+', $imageData);

        $imageName = 'absen_' . time() . '.png';
        Storage::disk('public')->put('absensi/' . $imageName, base64_decode($imageData));

        Absensi::create([
            'user_id' => $user->id,
            'pendaftar_id' => $pendaftar->id,
            'nama' => $user->name,
            'ekskul' => $pendaftar->ekskul,
            'kehadiran' => $request->kehadiran,
            'keterangan' => $request->keterangan,
            'foto' => 'absensi/' . $imageName,
        ]);

        return response()->json(['status' => 'success']);
    }
}
