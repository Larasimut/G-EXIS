<?php

namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Ekskul;
use App\Models\Absensi;
use App\Models\Siswa;

class RekapController extends Controller
{
    public function index(Request $request)
    {
        $pembinaId = Auth::id();

        // Ambil ekskul milik pembina
        $ekskul = Ekskul::where('pembina_id', $pembinaId)->first();

        if (!$ekskul) {
            return back()->with('error', 'Anda belum membina ekskul manapun.');
        }

        // FILTER BULAN (default = sekarang)
        $bulan = $request->bulan ?? date('Y-m');

        $rekap = [];

        // Ambil semua siswa di ekskul ini
        foreach ($ekskul->siswa as $siswa) {

            // Hitung hadir
            $hadir = Absensi::where('siswa_id', $siswa->id)
                ->where('eks_kul_id', $ekskul->id)
                ->whereMonth('tanggal', substr($bulan, 5))
                ->whereYear('tanggal', substr($bulan, 0, 4))
                ->where('status', 'hadir')
                ->count();

            // Hitung tidak hadir
            $tidak = Absensi::where('siswa_id', $siswa->id)
                ->where('eks_kul_id', $ekskul->id)
                ->whereMonth('tanggal', substr($bulan, 5))
                ->whereYear('tanggal', substr($bulan, 0, 4))
                ->where('status', 'tidak_hadir')
                ->count();

            $rekap[] = [
                'nama' => $siswa->nama,
                'hadir' => $hadir,
                'tidak_hadir' => $tidak
            ];
        }

        return view('pembina.rekap.index', [
            'rekap' => $rekap,
            'bulan' => $bulan,
            'ekskul' => $ekskul
        ]);
    }

    public function absenSiswa(Request $request)
{
    // Default bulan = bulan sekarang
    $bulan = $request->bulan ?? date('Y-m');

    $pembinaId = Auth::id();

    // Ambil semua ekskul milik pembina
    $ekskulList = Ekskul::where('pembina_id', $pembinaId)->get();

    $rekap = [];

    foreach ($ekskulList as $ekskul) {
        foreach ($ekskul->siswa as $siswa) {

            $hadir = Absensi::where('siswa_id', $siswa->id)
                ->where('eks_kul_id', $ekskul->id)
                ->whereMonth('tanggal', substr($bulan, 5))
                ->whereYear('tanggal', substr($bulan, 0, 4))
                ->where('status', 'hadir')
                ->count();

            $tidak = Absensi::where('siswa_id', $siswa->id)
                ->where('eks_kul_id', $ekskul->id)
                ->whereMonth('tanggal', substr($bulan, 5))
                ->whereYear('tanggal', substr($bulan, 0, 4))
                ->where('status', 'tidak_hadir')
                ->count();

            $rekap[] = [
                'ekskul' => $ekskul->nama,
                'nama' => $siswa->nama,
                'hadir' => $hadir,
                'tidak_hadir' => $tidak
            ];
        }
    }

    return view('pembina.absen_siswa', [
        'rekap' => $rekap,
        'bulan' => $bulan
    ]);
}

}
