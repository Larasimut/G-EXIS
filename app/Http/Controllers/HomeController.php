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

        return redirect()->back()->with('success', 'Pendaftaran ekstrakulikuler berhasil dikirim!');
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
            'desc' => 'Ekstrakurikuler Aksara berfokus pada pengembangan kemampuan literasi seperti menulis, membaca, dan mengolah karya sastra. Cocok bagi siswa yang gemar menuangkan ide melalui tulisan kreatif maupun jurnalistik.',
            'galeri' => ['galeriaksara.jpg', 'galeriaksara1.jpg'],

            // JADWAL
            'jadwal' => [
                'hari' => 'Senin & Rabu',
                'waktu' => '15.30 - 16.30 WIB',
                'tempat' => 'Perpustakaan'
            ],


        ],

        [
            'img' => 'basketlogo.png',
            'nama' => 'Basket',
            'kategori' => 'Olahraga',
            'desc' => 'Ekstrakurikuler Basket melatih keterampilan bermain bola basket, kerja sama tim, dan sportivitas. Selain fisik, siswa juga dibina dalam strategi permainan dan kedisiplinan.',
            'galeri' => ['galeribasket.jpg','galeribasket1.jpg','galeribasket2.jpg'],

            'jadwal' => [
                'hari' => 'Selasa & Jumat',
                'waktu' => '16.00 - 18.00 WIB',
                'tempat' => 'Lapangan Basket'
            ],

            'prestasi' => [
                [
                    'foto' => 'juara.jpg',
                    'judul' => 'Juara 2 Turnamen Basket Pelajar',
                    'ket' => 'Turnamen pelajar tingkat kota tahun 2024.'
                ]
            ]
        ],

        [
            'img' => 'codinglogo.png',
            'nama' => 'Coding',
            'kategori' => 'Pemrograman',
            'desc' => 'Ekstrakurikuler Coding mengajarkan dasar-dasar pemrograman dan teknologi digital. Siswa belajar logika berpikir, problem solving, serta pembuatan aplikasi atau website sederhana.',
            'galeri' => ['galericoding.jpg','galericoding1.jpg'],

            'jadwal' => [
                'hari' => 'Rabu',
                'waktu' => '15.00 - 17.00 WIB',
                'tempat' => 'Lab Komputer'
            ],

            'prestasi' => [
                [
                    'foto' => 'juaracoding.jpg',
                    'judul' => 'Juara 3 Coding Sumedang',
                    'ket' => 'Juara lomba coding Sumedang 2025.'
                ]
            ]
        ],

        [
            'img' => 'dblogo.png',
            'nama' => 'Drumband',
            'kategori' => 'Seni Musik',
            'desc' => 'Ekstrakurikuler Drumband melatih kekompakan, ritme, dan disiplin melalui permainan alat musik perkusi. Cocok untuk siswa yang menyukai musik dan kegiatan baris-berbaris.',
            'galeri' => ['galeridrumband.jpg','galeridrumband1.jpg','drumband.jpg'],

            'jadwal' => [
                'hari' => 'Selasa',
                'waktu' => '15.00 - 16.30 WIB',
                'tempat' => 'Lapangan/Kelas MPLB'
            ],

            'prestasi' => [
                [
                    'foto' => 'juaradrumband.jpg',
                    'judul' => 'Juara Terfavorit',
                    'ket' => 'Prestasi tahun 2025 saat lomba Drumband di Sumedang Tadjimalela'
                ],
            ]
        ],
        [
            'img' => 'eclogo.png',
            'nama' => 'English Club',
            'kategori' => 'Sastra',
            'desc' => 'English Club bertujuan meningkatkan kemampuan berbahasa Inggris, terutama speaking dan listening. Kegiatan meliputi diskusi, permainan, presentasi, dan praktik komunikasi sehari-hari.',
            'galeri' => ['galeriec.jpg','galeriec1.jpg','galeriec2.jpg'],

            'jadwal' => [
                'hari' => 'Selasa',
                'waktu' => '15.30 - 16.30 WIB',
                'tempat' => 'Lab Inggris'
            ],

            'prestasi' => [
                [
                    'foto' => 'juaraaksara.jpg',
                    'judul' => 'Juara 2 Essay Writing Brijafest',
                    'ket' => 'Prestasi tahun 2024 saat lomba Essay di Sumedang Creative Center 30 Juni 2024.'
                ],
                [
                    'foto' => 'juaraec.jpg',
                    'judul' => 'Juara 3 Jurnalistik Provinsi',
                    'ket' => 'Prestasi tahun 2025 lomba FLS3N Tingkat Provinsi Jawa Barat '
                ],
                  [
                    'foto' => 'juaraec1.jpg',
                    'judul' => 'Juara 3 Speech',
                    'ket' => 'Prestasi tahun 2025 saat lomba Speech di Sumedang Creative Center 30 Juni 2024.'
                ]
            ]
        ],
        [
            'img' => 'futsallogo.png',
            'nama' => 'Futsal',
            'kategori' => 'Olahraga',
            'desc' => 'Ekstrakurikuler Futsal berfokus pada pengembangan teknik bermain futsal, kebugaran fisik, serta kerja sama tim. Kegiatan ini juga menanamkan jiwa sportivitas dan semangat kompetisi.',
            'galeri' => ['galerifutsal.jpg', 'galerifutsal1.jpg', 'galerifutsal2.jpg'],

            'jadwal' => [
                'hari' => 'Kamis',
                'waktu' => '15.30 - 16.30 WIB',
                'tempat' => 'Lapangan'
            ],

        ],
        [
            'img' => 'irmalogo.png',
            'nama' => 'Ikatan Remaja Masjid',
            'kategori' => 'Keagamaan',
            'desc' => 'IRMA (Ikatan Remaja Masjid) bertujuan membentuk karakter siswa yang berakhlak mulia dan aktif dalam kegiatan keagamaan. Kegiatan meliputi kajian, bakti sosial, dan pengelolaan kegiatan masjid.',
            'galeri' => ['galeriirma.jpg','galeriirma1.jpg'],

            'jadwal' => [
                'hari' => 'Jumat',
                'waktu' => '15.30 - 16.30 WIB',
                'tempat' => 'Masjid'
            ],


        ],
        [
            'img' => 'karatelogo.png',
            'nama' => 'Karate',
            'kategori' => 'Bela Diri',
            'desc' => 'Ekstrakurikuler Karate melatih bela diri, kedisiplinan, dan pengendalian diri. Selain fisik, siswa juga diajarkan nilai mental seperti rasa percaya diri dan tanggung jawab.',
            'galeri' => ['galerikarate.jpg','galerikarate1.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'karate.png',
                    'judul' => 'Juara 1 Marching Band Kota',
                    'ket' => 'Prestasi tahun 2023 saat lomba marching band tingkat kota.'
                ],
            ]
        ],
        [
            'img' => 'karawitanlogo.png',
            'nama' => 'Karawitan',
            'kategori' => 'Seni Musik',
            'desc' => 'Karawitan merupakan ekstrakurikuler seni musik tradisional Jawa. Siswa belajar memainkan alat musik gamelan serta memahami nilai budaya dan kearifan lokal.',
            'galeri' => ['galerikarawitan.jpg','galerikarawitan1.jpg'],

            'jadwal' => [
                'hari' => 'Rabu',
                'waktu' => '15.30 - 16.30 WIB',
                'tempat' => 'Ruang Kesenian'
            ]
            ],

        [
            'img' => 'kirlogo.png',
            'nama' => 'Karya Ilmiah Remaja',
            'kategori' => 'Experimence',
            'desc' => 'Ekstrakurikuler KIR mengembangkan kemampuan berpikir kritis dan ilmiah. Siswa dilatih meneliti, menulis karya ilmiah, dan mempresentasikan hasil penelitian.',
            'galeri' => ['galerikir.jpg', 'galerikir1.jpeg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lab Kimia'
            ],


        ],
        [
            'img' => 'logomedia.png',
            'nama' => 'Media Publikasi',
            'kategori' => 'Dokumentasi',
            'desc' => 'Media Publikasi berfokus pada jurnalistik, fotografi, videografi, dan desain konten. Ekskul ini cocok bagi siswa yang tertarik pada dunia media dan kreatif digital.',
            'galeri' => ['media.jpg'],

            'jadwal' => [
                'hari' => 'Selasa',
                'waktu' => '15.30 - 16.00 WIB',
                'tempat' => 'Sekolah'
            ],


        ],
        [
            'img' => 'paduanlogo.png',
            'nama' => 'Paduan Suara',
            'kategori' => 'Musikalisasi',
            'desc' => 'Ekstrakurikuler Paduan Suara melatih teknik vokal, harmonisasi, dan kepercayaan diri saat tampil. Siswa belajar bernyanyi secara individu maupun kelompok.',
            'galeri' => ['galeripaduansuara.jpg', 'galeripaduansuara1.jpg'],

            'jadwal' => [
                'hari' => 'Rabu',
                'waktu' => '15.00 - 16.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

        ],
        [
            'img' => 'paskiblogo.png',
            'nama' => 'Paskibra',
            'kategori' => 'Pasukan Baris Berbaris',
            'desc' => 'Paskibra membentuk siswa yang disiplin, bertanggung jawab, dan memiliki jiwa nasionalisme. Kegiatan meliputi latihan baris-berbaris dan upacara kenegaraan.',
            'galeri' => ['galeripaskib.jpg','galeripaskib1.jpg','juarapaskib2.jpg', 'galeripaskib3.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],

            'prestasi' => [
                [
                    'foto' => 'juarapaskib.jpg',
                    'judul' => 'Juara Harapan Utama 3 ',
                    'ket' => 'Prestasi tahun 2024 saat lomba di SMPN 3 Sumedang '
                ],
                [
                    'foto' => 'juarapaskib1.jpg',
                    'judul' => 'Juara Variasi Formasi 3 ',
                    'ket' => 'Prestasi Tahun 2024 saat lomba di LKBB Cakrabuana Garut'
                ],
                 [
                    'foto' => 'juarapaskib3.jpg',
                    'judul' => 'Juara Madya 1',
                    'ket' => 'Prestasi Tahun 2025 saat lomba di LKBB Adinira CP 2'
                 ]

            ]
        ],
        [
            'img' => 'pramukalogo.png',
            'nama' => 'Pramuka',
            'kategori' => 'Keberanian',
            'desc' => 'Ekstrakurikuler Pramuka melatih kemandirian, kepemimpinan, dan kerja sama. Kegiatan mencakup kepramukaan, keterampilan alam, serta pembentukan karakter.',
            'galeri' => ['galeripramuka.jpg','galeripramuka1.jpg','galeripramuka2.jpg'],

            'jadwal' => [
                'hari' => 'Jumat',
                'waktu' => '15.00 - 16.00 WIB',
                'tempat' => 'Ruang Kesenian'
            ],

            'prestasi' => [
                [
                    'foto' => 'juarapramuka.jpg',
                    'judul' => 'Juara Umum LSD',
                    'ket' => 'Prestasi tahun 2024 saat di SMPN 7 Sumedang'
                ],
                [
                    'foto' => 'juarapramuka1.jpg',
                    'judul' => 'Juara Purwa 6',
                    'ket' => 'Prestasi tahun 2024 di LKP Unsap'
                ]
            ]
        ],
        [
            'img' => 'silat.png',
            'nama' => 'Pencak Silat',
            'kategori' => 'Bela Diri',
            'desc' => 'Pencak Silat adalah seni bela diri tradisional Indonesia yang melatih fisik, mental, dan spiritual. Siswa diajarkan teknik bela diri sekaligus nilai budaya bangsa.',
            'galeri' => ['galerisilat.jpg','galerisilat1.jpg','silat.jpg'],

            'jadwal' => [
                'hari' => 'Kamis',
                'waktu' => '15.00 - 16.30 WIB',
                'tempat' => 'Lapangan Upacara'
            ],


        ],
        [
            'img' => 'photograhpy.jpg',
            'nama' => 'PhotoGraphy',
            'kategori' => 'Dokumentasi',
            'desc' => 'Ekstrakurikuler Photography mengajarkan teknik fotografi, komposisi gambar, dan editing. Cocok bagi siswa yang memiliki minat pada seni visual dan dokumentasi.',
            'galeri' => ['photograhpy.jpg'],

            'jadwal' => [
                'hari' => 'Senin',
                'waktu' => '15.00 - 16.00 WIB',
                'tempat' => 'SMKN 2 SUMEDANG'
            ],

        ],
        [
            'img' => 'pmrlogo.png',
            'nama' => 'Palang Merah Remaja',
            'kategori' => 'Kesehatan',
            'desc' => 'PMR membekali siswa dengan keterampilan pertolongan pertama dan kepedulian sosial. Ekskul ini menanamkan sikap kemanusiaan dan kesiapsiagaan.',
            'galeri' => ['galeripmr2.jpg','galeripmr1.jpg'],

            'jadwal' => [
                'hari' => 'Senin',
                'waktu' => '15.00 - 16.00 WIB',
                'tempat' => 'Ruangan UKS'
            ],

        ],
        [
            'img' => 'logotari.png',
            'nama' => 'Seni Tari',
            'kategori' => 'Kesenian',
            'desc' => 'Ekstrakurikuler Seni Tari mengembangkan bakat menari dan ekspresi seni. Siswa belajar tari tradisional maupun modern serta meningkatkan rasa percaya diri saat tampil.',
            'galeri' => ['galeritari.jpg','galeritari1.jpg','tari.jpg'],

            'jadwal' => [
                'hari' => 'Sabtu',
                'waktu' => '08.00 - 10.00 WIB',
                'tempat' => 'Lapangan Upacara'
            ],



        ],
        [
            'img' => 'tatabogalogo.png',
            'nama' => 'Tata Boga',
            'kategori' => 'Memasak',
            'desc' => 'Tata Boga mengajarkan keterampilan memasak, penyajian makanan, dan kebersihan dapur. Cocok bagi siswa yang tertarik pada dunia kuliner dan kewirausahaan.',
            'galeri' => ['galeritataboga.jpg','galeritataboga1.jpeg','tataboga.jpg'],

            'jadwal' => [
                'hari' => 'Jumat',
                'waktu' => '15.00 - 16.00 WIB',
                'tempat' => 'Di SMKN2 Sumedang'
            ],
        ],
        [
            'img' => 'tatariaslogo.png',
            'nama' => 'Tata Rias',
            'kategori' => 'Kecantikan',
            'desc' => 'Ekstrakurikuler Tata Rias melatih keterampilan make-up dan perawatan diri. Siswa belajar teknik rias wajah untuk berbagai acara secara profesional.',
            'galeri' => ['galeritatarias.jpg','galeritatarias1.jpg'],

            'jadwal' => [
                'hari' => 'Kamis',
                'waktu' => '15.00 - 16.00 WIB',
                'tempat' => 'Salon SMKN 2 SUMEDANG'
            ],

        ],
        [
            'img' => 'voly.png',
            'nama' => 'Volli',
            'kategori' => 'Olahraga',
            'desc' => 'Ekstrakurikuler Voli melatih teknik bermain bola voli, kebugaran jasmani, dan kerja sama tim. Kegiatan ini juga membangun semangat sportivitas.',
            'galeri' => ['galerivoli.jpg','galerivoli1.jpeg'],

            'jadwal' => [
                'hari' => 'Kamis',
                'waktu' => '15.00 - 16.00 WIB',
                'tempat' => 'Lapangan'
            ],
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
