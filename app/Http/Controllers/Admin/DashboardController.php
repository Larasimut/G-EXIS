<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\Ekskul;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
        // =========================
        // STAT CARD
        // =========================

        // Total ekskul
        $ekskul_count = Ekskul::count();

        // Total siswa yang BENAR-BENAR daftar & diterima
        $siswa_count = Pendaftar::where('status', 'diterima')
                        ->distinct('user_id')
                        ->count('user_id');

        // Total pembina
        $pembina_count = User::where('role', 'pembina')->count();

        // =========================
        // PIE CHART: KELAS
        // =========================
        $kelas = Pendaftar::where('status', 'diterima')
            ->select('kelas', DB::raw('count(*) as total'))
            ->groupBy('kelas')
            ->pluck('total', 'kelas')
            ->toArray();

        // Urutan kelas (biar rapi)
        $kelas_distribution = [
            $kelas['10'] ?? 0,
            $kelas['11'] ?? 0,
            $kelas['12'] ?? 0,
        ];

        // =========================
        // BAR CHART: EKSKUL
        // =========================
        $ekskul_data = Pendaftar::where('status', 'diterima')
            ->select('ekskul', DB::raw('count(*) as total'))
            ->groupBy('ekskul')
            ->get();

        $ekskul_names  = $ekskul_data->pluck('ekskul');
        $ekskul_values = $ekskul_data->pluck('total');

        // =========================
        // KIRIM KE VIEW
        // =========================
        return view('admin.dashboard', [
            'data' => [
                'ekskul_count'       => $ekskul_count,
                'siswa_count'        => $siswa_count,
                'pembina_count'      => $pembina_count,
                'kelas_distribution' => $kelas_distribution,
                'ekskul_names'       => $ekskul_names,
                'ekskul_values'      => $ekskul_values,
            ]
        ]);
    }
 public function riwayatPendaftaran()
{
    $riwayat = DB::table('pendaftar')
        ->join('users', 'pendaftar.user_id', '=', 'users.id')
        ->leftJoin('ekskuls', 'pendaftar.ekskul_id', '=', 'ekskuls.id')
        ->where('pendaftar.status', 'diterima')
        ->select(
            'users.name as nama_siswa',
            DB::raw('COALESCE(ekskuls.nama, pendaftar.ekskul) as nama_ekskul'),
            'pendaftar.created_at as tanggal_gabung'
        )
        ->orderBy('pendaftar.created_at', 'desc')
        ->paginate(10);

    return view('admin.riwayat_pendaftaran', compact('riwayat'));
}

}
