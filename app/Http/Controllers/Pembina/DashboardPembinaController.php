<?php

namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use App\Models\Pendaftar;
use Illuminate\Support\Facades\DB;

class DashboardPembinaController extends Controller
{
    public function index()
    {
        $ekskulPembina = auth()->user()->ekskul;

        // Anggota diterima
        $totalAnggota = Pendaftar::where('ekskul', $ekskulPembina)
                            ->where('status', 'diterima')
                            ->count();

        // Total pendaftar
        $totalPendaftar = Pendaftar::where('ekskul', $ekskulPembina)->count();

        // Pending
        $totalPending = Pendaftar::where('ekskul', $ekskulPembina)
                            ->where('status', 'pending')
                            ->count();

        // Ditolak
        $totalDitolak = Pendaftar::where('ekskul', $ekskulPembina)
                            ->where('status', 'ditolak')
                            ->count();

        // Data untuk line chart (per bulan)
        $monthlyData = Pendaftar::selectRaw("MONTH(created_at) as bulan, COUNT(*) as jumlah")
            ->where('ekskul', $ekskulPembina)
            ->groupBy('bulan')
            ->pluck('jumlah', 'bulan');

        // Format bulan 1–12
        $chartLabels = [];
        $chartValues = [];

        for ($i = 1; $i <= 12; $i++) {
            $chartLabels[] = date("M", mktime(0, 0, 0, $i, 1));
            $chartValues[] = $monthlyData[$i] ?? 0;
        }

        return view('pembina.beranda', compact(
            'totalAnggota',
            'totalPendaftar',
            'totalPending',
            'totalDitolak',
            'chartLabels',
            'chartValues'
        ));
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

    return view('admin.riwayat-pendaftaran', compact('riwayat'));
}
}
