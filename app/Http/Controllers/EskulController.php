<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EskulController extends Controller
{
    public function detail($nama)
{
    $data = [
        'aksara-gridas' => [
            'nama' => 'Aksara Gridas',
            'logo' => 'images/aksaralogo.png',
            'desc' => 'Aksara Gridas merupakan ekstrakurikuler yang fokus pada dunia literasi...',
            'hari' => 'Selasa & Kamis',
            'waktu' => '15:30 – 17:00 WIB',
            'tempat' => 'Ruang Literasi — Gedung B',

            'pembina' => [
                'nama' => 'Bapak Andika Ramadhan',
                'foto' => 'images/pembina.jpg',
                'bio'  => 'Pembina ekskul dengan pengalaman di bidang sastra & literasi...'
            ],

            'galeri' => [
                'images/aksara.jpg',
                'images/aksara.jpg',
                'images/aksara.jpg'
            ],

            'video' => 'video/dp-video.mp4',

            'prestasi' => [
                [
                    'judul' => 'Juara Cerpen 2024',
                    'ket'   => 'Lomba tingkat kabupaten',
                    'foto'  => 'images/prestasi1.jpg'
                ],
                [
                    'judul' => 'Finalis Puisi Nasional',
                    'ket'   => 'Masuk 20 besar nasional',
                    'foto'  => 'images/prestasi2.jpg'
                ],
                [
                    'judul' => 'Pameran Buku 2023–2024',
                    'ket'   => 'Karya siswa dipamerkan',
                    'foto'  => 'images/prestasi3.jpg'
                ],
            ]
        ],
        // ekskul lain tinggal tambahkan disini...
    ];

    $nama = strtolower($nama);

    if (!array_key_exists($nama, $data)) {
        abort(404); // jika ekskul tidak ditemukan
    }

    return view('siswa.eskul-detail', [
        'eks' => $data[$nama]
    ]);
}

}
