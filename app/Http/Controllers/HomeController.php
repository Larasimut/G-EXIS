<?php
namespace App\Http\Controllers;

use App\Models\Notification; // ⬅ WAJIB

class HomeController extends Controller
{
    public function beranda()
    {
        return view('siswa.beranda');
    }

    public function ekstrakulikuler()
    {
        return view('siswa.ekstrakulikuler');
    }

    public function kontak()
    {
        return view('siswa.kontak');
    }

    public function tambahEkskul()
    {
        return view('siswa.tambah-ekskul');
    }

    public function ekskulTerdaftar()
    {
        return view('siswa.ekskul-terdaftar');
    }

    public function notifikasi()
    {
        $notifs = Notification::where('role', 'siswa')
                    ->latest()
                    ->get();

        return view('siswa.notifikasi', compact('notifs'));
    }

    public function lihatEkskul()
    {
        return view('siswa.lihatekskul');
    }

    public function detailTerdaftar()
    {
        return view('siswa.detailTerdaftar');
    }

    public function absen()
    {
        return view('siswa.absen');
    }

    public function jadwal()
    {
        return view('siswa.jadwal');
    }

    public function sertifikat()
    {
        return view('siswa.sertifikat');
    }
}
