<?php
namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use App\Models\Absensi;
use Illuminate\Http\Request;
use App\Exports\AbsensiExport;
use Maatwebsite\Excel\Facades\Excel;

class RekapAbsensiPembinaController extends Controller
{
    public function index(Request $request)
    {
        $ekskulPembina = auth()->user()->ekskul;

        $bulan = $request->bulan ?? null;

        $absensi = Absensi::where('ekskul', $ekskulPembina)
            ->when($bulan, function ($query) use ($bulan) {
                $query->whereYear('created_at', substr($bulan, 0, 4))
                      ->whereMonth('created_at', substr($bulan, 5, 2));
            })
            ->orderBy('created_at', 'desc')
            ->get();

        return view('pembina.absen_siswa', compact('absensi', 'bulan'));
    }
    public function downloadExcel(Request $request)
{
    $ekskulPembina = auth()->user()->ekskul;
    $bulan = $request->bulan;

    $absensi = Absensi::where('ekskul', $ekskulPembina)
        ->when($bulan, function ($query) use ($bulan) {
            $query->whereYear('created_at', substr($bulan, 0, 4))
                  ->whereMonth('created_at', substr($bulan, 5, 2));
        })
        ->orderBy('created_at', 'desc')
        ->get();

    return Excel::download(new AbsensiExport($absensi), 'rekap-absensi.xlsx');
}
public function download(Request $request)
{
    $ekskulPembina = auth()->user()->ekskul;
    $bulan = $request->bulan;

    $absensi = Absensi::where('ekskul', $ekskulPembina)
        ->when($bulan, function ($query) use ($bulan) {
            $query->whereYear('created_at', substr($bulan, 0, 4))
                  ->whereMonth('created_at', substr($bulan, 5, 2));
        })
        ->orderBy('created_at', 'desc')
        ->get();

    return \Excel::download(new \App\Exports\AbsensiExport($absensi), 'rekap_absensi.xlsx');
}

}
