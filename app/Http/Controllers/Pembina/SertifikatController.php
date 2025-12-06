<?php

namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\Facade\Pdf;
use App\Models\Sertifikat;

class SertifikatController extends Controller
{
    // Tampilkan halaman + riwayat sertifikat
    public function index()
    {
        $certificates = Sertifikat::latest()->get();
        return view('pembina.sertifikat.index', compact('certificates'));
    }

    // Generate PDF + simpan ke database
    public function generate(Request $request)
    {
        $request->validate([
            'nama' => 'required',
            'kegiatan' => 'required',
            'tanggal' => 'required|date',
        ]);

        $data = $request->only('nama','kegiatan','tanggal');

        // Simpan ke database
        $sertifikat = Sertifikat::create($data);

        // Generate PDF
        $pdf = Pdf::loadView('pembina.sertifikat.sertifikat', $data);

        return $pdf->download('sertifikat-'.$sertifikat->id.'.pdf');
    }

    // Preview sertifikat
    public function preview($id)
    {
        $sertifikat = Sertifikat::findOrFail($id);

        $data = [
            'nama' => $sertifikat->nama,
            'kegiatan' => $sertifikat->kegiatan,
            'tanggal' => $sertifikat->tanggal,
        ];

        $pdf = Pdf::loadView('pembina.sertifikat.sertifikat', $data);

        return $pdf->stream('sertifikat-preview.pdf');
    }

    // Hapus sertifikat
    public function destroy($id)
    {
        $sertifikat = Sertifikat::findOrFail($id);
        $sertifikat->delete();

        return redirect()->back()->with('success', 'Sertifikat berhasil dihapus!');
    }
}
