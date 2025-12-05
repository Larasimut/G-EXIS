<?php

namespace App\Http\Controllers\Pembina;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SertifikatController extends Controller
{
    // Data dummy (karena kamu hanya mau tampilan)
    private $dummyCertificates = [
        ['id' => 1, 'nama' => 'Rizky Ramadhan', 'kegiatan' => 'Lomba Futsal', 'tanggal' => '2024-10-12'],
        ['id' => 2, 'nama' => 'Jihan Aulia', 'kegiatan' => 'Pramuka', 'tanggal' => '2024-09-01'],
    ];

    public function index()
    {
        $certificates = $this->dummyCertificates;
        return view('pembina.sertifikat.index', compact('certificates'));
    }

    public function generate(Request $request)
    {
        return back()->with('success', 'Sertifikat berhasil dibuat! (dummy)');
    }

    public function download($id)
    {
        $cert = collect($this->dummyCertificates)->firstWhere('id', $id);

        if (!$cert) {
            abort(404);
        }

        return view('pembina.sertifikat.template', compact('cert'));
    }
}
