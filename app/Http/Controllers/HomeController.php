<?php
namespace App\Http\Controllers;

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
        return view('siswa.tambah-ekskul'); // gunakan dash sesuai nama file view
    }

    public function ekskulTerdaftar()
    {
        return view('siswa.ekskul-terdaftar'); // gunakan dash sesuai nama file view
    }

    public function notifikasi()
    {
        return view('siswa.notifikasi');
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
        return view('siswa.absen'); // view untuk tampilan absen
    }

    public function jadwal()
    {
        return view('siswa.jadwal'); // view untuk tampilan jadwal latihan
    }

    public function sertifikat()
    {
        return view('siswa.sertifikat'); // view untuk tampilan sertifikat
    }
}
