<?php

namespace App\Exports;

use App\Models\Ekskul;
use App\Models\AbsensiEkskul;
use Illuminate\Support\Facades\Auth;
use Maatwebsite\Excel\Concerns\FromArray;

class RekapAbsenExport implements FromArray
{
    protected $bulan;

    public function __construct($bulan)
    {
        $this->bulan = $bulan;
    }

    public function array(): array
    {
        $pembinaId = Auth::id();
        $tahun = substr($this->bulan, 0, 4);
        $bulanAngka = substr($this->bulan, 5, 2);

        $ekskulList = Ekskul::where('pembina_id', $pembinaId)->get();
        $data = [["Ekskul", "Nama", "Hadir", "Tidak Hadir"]];

        foreach ($ekskulList as $e) {
            foreach ($e->siswa as $siswa) {

                $hadir = AbsensiEkskul::where('siswa_id', $siswa->id)
                    ->where('ekskul_id', $e->id)
                    ->whereYear('created_at', $tahun)
                    ->whereMonth('created_at', $bulanAngka)
                    ->where('status', 'hadir')
                    ->count();

                $tidakHadir = AbsensiEkskul::where('siswa_id', $siswa->id)
                    ->where('ekskul_id', $e->id)
                    ->whereYear('created_at', $tahun)
                    ->whereMonth('created_at', $bulanAngka)
                    ->where('status', 'tidak hadir')
                    ->count();

                $data[] = [
                    $e->nama,
                    $siswa->name,
                    $hadir,
                    $tidakHadir,
                ];
            }
        }

        return $data;
    }
}
