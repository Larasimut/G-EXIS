<?php

namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ekskul;
use App\Models\Absensi;

class RekapController extends Controller
{
    // Rekap absensi per ekskul yang dibina pembina
    public function index(Request $request)
    {
        $pembinaId = Auth::id();
        $ekskul = Ekskul::where('pembina_id', $pembinaId)->first();

        if (!$ekskul) {
            return back()->with('error', 'Anda belum membina ekskul manapun.');
        }

        $bulan = $request->bulan ?? date('Y-m');
        $rekap = [];

        foreach ($ekskul->siswa as $siswa) {
            $hadir = Absensi::where('siswa_id', $siswa->id)
                ->where('ekskul_id', $ekskul->id)
                ->whereMonth('tanggal', substr($bulan, 5, 2))
                ->whereYear('tanggal', substr($bulan, 0, 4))
                ->where('status', 'hadir')
                ->count();

            $tidak_hadir = Absensi::where('siswa_id', $siswa->id)
                ->where('ekskul_id', $ekskul->id)
                ->whereMonth('tanggal', substr($bulan, 5, 2))
                ->whereYear('tanggal', substr($bulan, 0, 4))
                ->whereIn('status', ['tidak_hadir', 'izin', 'sakit'])
                ->count();

            $rekap[] = [
                'ekskul'      => $ekskul->nama,
                'nama'        => $siswa->nama,
                'hadir'       => $hadir,
                'tidak_hadir' => $tidak_hadir,
            ];
        }

        return view('pembina.rekap.index', compact('rekap', 'bulan', 'ekskul'));
    }

    // Rekap absensi semua ekskul yang dibina pembina
    public function absenSiswa(Request $request)
    {
        $bulan = $request->bulan ?? date('Y-m');
        $pembinaId = Auth::id();

        $ekskulList = Ekskul::where('pembina_id', $pembinaId)->get();
        $rekap = [];

        foreach ($ekskulList as $ekskul) {
            foreach ($ekskul->siswa as $siswa) {

                $hadir = Absensi::where('siswa_id', $siswa->id)
                    ->where('ekskul_id', $ekskul->id)
                    ->whereMonth('tanggal', substr($bulan, 5, 2))
                    ->whereYear('tanggal', substr($bulan, 0, 4))
                    ->where('status', 'hadir')
                    ->count();

                $tidak_hadir = Absensi::where('siswa_id', $siswa->id)
                    ->where('ekskul_id', $ekskul->id)
                    ->whereMonth('tanggal', substr($bulan, 5, 2))
                    ->whereYear('tanggal', substr($bulan, 0, 4))
                    ->whereIn('status', ['tidak_hadir', 'izin', 'sakit'])
                    ->count();

                $rekap[] = [
                    'ekskul'      => $ekskul->nama,
                    'nama'        => $siswa->nama,
                    'hadir'       => $hadir,
                    'tidak_hadir' => $tidak_hadir,
                ];
            }
        }

        return view('pembina.absen_siswa', compact('rekap', 'bulan'));
    }
}
