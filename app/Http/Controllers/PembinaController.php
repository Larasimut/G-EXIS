<?php

namespace App\Http\Controllers;

use App\Models\Pendaftar;
use Illuminate\Http\Request;

class PembinaController extends Controller
{
    public function konfirmasi()
    {
        $data = Pendaftar::latest()->get(); // <-- kirim variabel $data

        return view('pembina.konfirmasi', compact('data'));
    }

    public function terima($id)
    {
        Pendaftar::where('id', $id)->update(['status' => 'diterima']);

        return back()->with('success', 'Pendaftaran berhasil diterima');
    }

    public function tolak($id)
    {
        Pendaftar::where('id', $id)->update(['status' => 'ditolak']);

        return back()->with('success', 'Pendaftaran berhasil ditolak');
    }
}
