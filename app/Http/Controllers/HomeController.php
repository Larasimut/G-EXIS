<?php
namespace App\Http\Controllers;

use App\Models\Notification;
use App\Models\Pendaftar;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


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

    // === Method untuk menyimpan pendaftaran ekskul ===
    public function tambahEkskulPost(Request $request)
    {
        $request->validate([
            'ekskul' => 'required|string|max:255',
            'alasan' => 'required|string',
            'kontak' => 'required|string|max:255',
        ]);

        Pendaftar::create([
            'user_id' => auth()->id(),
            'nama'    => auth()->user()->name,
            'kelas'   => auth()->user()->kelas,
            'ekskul'  => $request->ekskul,
            'alasan'  => $request->alasan,
            'kontak'  => $request->kontak,
            'status'  => 'pending',
        ]);

        return redirect()->route('siswa.ekskulTerdaftar')
                         ->with('success', 'Berhasil mendaftar ekskul!');
    }

  public function ekskulTerdaftar()
{
    // Ambil data pendaftar untuk siswa yang sedang login
    $pendaftar = Pendaftar::where('user_id', auth()->id())->get();

    return view('siswa.ekskul-terdaftar', compact('pendaftar'));
}
public function batalEkskul($id)
{
    $pendaftar = Pendaftar::findOrFail($id);

    // Optional: Cek kalau pendaftar milik user yang sedang login
    if ($pendaftar->user_id != auth()->id()) {
        abort(403, "Akses ditolak");
    }

    $pendaftar->delete();

    return redirect()->route('siswa.ekskulTerdaftar')
                     ->with('success', 'Pendaftaran ekskul berhasil dibatalkan.');
}


    public function notifikasi()
    {
        $notifs = Notification::where('role', 'siswa')
                    ->latest()
                    ->get();

        return view('siswa.notifikasi', compact('notifs'));
    }

public function detailTerdaftar($id)
{
    $pendaftar = Pendaftar::findOrFail($id);

    return view('siswa.detailTerdaftar', compact('pendaftar'));

}


public function absen($id = null)
{
    if (!$id) {
        abort(404);
    }

    $pendaftar = Pendaftar::where('user_id', Auth::id())
        ->where('id', $id)
        ->firstOrFail();

    return view('siswa.absen', compact('pendaftar'));
}

    public function jadwal()
    {
        return view('siswa.jadwal');
    }

    public function sertifikat()
    {
        return view('siswa.sertifikat');
    }
public function formpendaftaran()
    {
        return view('siswa.formpendaftaran');
    }

public function keluar($id)
{
    $pendaftar = Pendaftar::where('id', $id)
        ->where('user_id', auth()->id())
        ->firstOrFail();

    $pendaftar->update([
        'status_keluar' => 'pending'
    ]);

    return back()->with('success', 'Permintaan keluar sedang diproses pembina.');
}


public function lihatEkskul()
{
    $eskulList = [
        [
            'img' => 'aksaralogo.png',
            'nama' => 'Aksara',
            'kategori' => 'Literasi',
            'desc' => 'Ekstrakurikuler yang mengasah keterampilan menulis, membaca naskah, dan karya sastra.',
            'galeri' => ['aksara.jpg', 'aksara.jpg', 'aksara.jpg'],

            // JADWAL
            'jadwal' => [
                'hari' => 'Senin & Kamis',
                'waktu' => '15.30 - 17.00 WIB',
                'tempat' => 'Perpustakaan'
            ],

            // PRESTASI
            'prestasi' => [
                [
                    'foto' => 'prestasi1.jpg',
                    'judul' => 'Juara 1 Lomba Baca Puisi Kabupaten',
                    'ket' => 'Memenangkan lomba baca puisi tingkat kabupaten tahun 2024.'
                ],
                [
                    'foto' => 'prestasi2.jpg',
                    'judul' => 'Nominasi Penulis Cerita Pendek',
                    'ket' => 'Masuk 10 besar lomba cerpen nasional.'
                ]
            ]
        ],

        [
            'img' => 'basketlogo.png',
            'nama' => 'Basket',
            'kategori' => 'Olahraga',
            'desc' => 'Ekstrakurikuler basket yang melatih fisik, teknik, dan kerja sama tim.',
            'galeri' => ['basket.jpg','basket.jpg','basket.jpg'],

            'jadwal' => [
                'hari' => 'Selasa & Jumat',
                'waktu' => '16.00 - 18.00 WIB',
                'tempat' => 'Lapangan Basket'
            ],

            'prestasi' => [
                [
                    'foto' => 'basket1.jpg',
                    'judul' => 'Juara 2 Turnamen Basket Pelajar',
                    'ket' => 'Turnamen pelajar tingkat kota tahun 2024.'
                ]
            ]
        ],

        [
            'img' => 'codinglogo.png',
            'nama' => 'Coding',
            'kategori' => 'Pemrograman',
            'desc' => 'Belajar dasar pemrograman, algoritma, dan membuat proyek aplikasi.',
            'galeri' => ['coding.jpg','coding.jpg','coding.jpg'],

            'jadwal' => [
                'hari' => 'Rabu',
                'waktu' => '15.00 - 17.00 WIB',
                'tempat' => 'Lab Komputer'
            ],

            'prestasi' => [
                [
                    'foto' => 'coding1.jpg',
                    'judul' => 'Finalis Hackathon Pelajar',
                    'ket' => 'Masuk final lomba hackathon se-Jawa Barat.'
                ]
            ]
        ],

        [
            'img' => 'dblogo.png',
            'nama' => 'Drumband',
            'kategori' => 'Seni Musik',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['drumband.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'eclogo.png',
            'nama' => 'English Club',
            'kategori' => 'Sastra',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['english club.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'futsallogo.png',
            'nama' => 'Futsal',
            'kategori' => 'Olahraga',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['futsall.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'futsall.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'irmalogo.png',
            'nama' => 'Ikatan Remaja Masjid',
            'kategori' => 'Keagamaan',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['irmah.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'karate.jpg',
            'nama' => 'Karate',
            'kategori' => 'Bela Diri',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['karate.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'karate.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'karawitanlogo.png',
            'nama' => 'Karawitan',
            'kategori' => 'Seni Musik',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['karawitan.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'kirlogo.png',
            'nama' => 'Karya Ilmiah Remaja',
            'kategori' => 'Experimence',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['drumband.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'media.jpg',
            'nama' => 'Media Publikasi',
            'kategori' => 'Dokumentasi',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['media.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'paduanlogo.png',
            'nama' => 'Paduan Suara',
            'kategori' => 'Musikalisasi',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['padus.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'paskiblogo.png',
            'nama' => 'Paskibra',
            'kategori' => 'Pasukan Baris Berbaris',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['drumband.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'pramukalogo.jpg',
            'nama' => 'Pramuka',
            'kategori' => 'Keberanian',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['pramuka.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'silat.png',
            'nama' => 'Pencak Silat',
            'kategori' => 'Bela Diri',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['drumband.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'photograhpy.jpg',
            'nama' => 'PhotoGraphy',
            'kategori' => 'Dokumentasi',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['drumband.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'pmrlogo.png',
            'nama' => 'Palang Merah Remaja',
            'kategori' => 'Kesehatan',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['drumband.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'tari.jpg',
            'nama' => 'Seni Tari',
            'kategori' => 'Kesenian',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['drumband.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'tatabogalogo.png',
            'nama' => 'Tata Boga',
            'kategori' => 'Memasak',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['drumband.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'tatariaslogo.png',
            'nama' => 'Tata Rias',
            'kategori' => 'Kecantikan',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['drumband.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
        [
            'img' => 'voly.png',
            'nama' => 'Volli',
            'kategori' => 'Olahraga',
            'desc' => 'Melatih keterampilan musik pukul, ritme, dan penampilan marching.',
            'galeri' => ['drumband.jpg','drumband.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'drum1.jpg',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
                [
                    'foto' => 'drum2.jpg',
                    'judul' => 'Best Conductor Award',
                    'ket' => 'Penghargaan untuk pemimpin drumband terbaik.'
                ]
            ]
        ],
    ];

    $id = request()->get('id');

    // Jika tidak ada ID → tampilkan daftar ekskul
    if ($id === null) {
        return view('siswa.ekstrakulikuler');
    }

    // Jika ID tidak valid
    if (!isset($eskulList[$id])) {
        abort(404);
    }

    // Ambil data
    $eskul = $eskulList[$id];

    // Tambahkan default agar tidak error
    $eskul['logo']      = $eskul['img'];
    $eskul['galeri']    = $eskul['galeri'] ?? [];
    $eskul['jadwal']    = $eskul['jadwal'] ?? null;
    $eskul['prestasi']  = $eskul['prestasi'] ?? [];

    return view('siswa.eskul-detail', compact('eskul'));
}

}
