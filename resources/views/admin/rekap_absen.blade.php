@extends('layouts.admin')

@section('title', 'Rekap Absensi Ekskul')

@section('content')

<div class="container mt-4">

    <!-- Judul Halaman -->
    <h2 class="text-center fw-bold" style="color:#1f4b7f;">
        Rekap Absensi Ekstrakurikuler Siswa
    </h2>

    <p class="text-center mt-2" style="color:#4a6fa1;">
        Halaman ini menampilkan catatan kehadiran siswa dalam setiap kegiatan ekstrakurikuler.
        <br>
        Data absensi direkap langsung oleh pembina untuk memastikan keaktifan dan kedisiplinan anggota.
    </p>

    <!-- Kartu Ekskul -->
<div class="mt-4">

    <div class="overflow-x-auto">
        <div class="d-flex flex-row gap-3 px-2" style="min-width:max-content;">

            <!-- Card 1 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/paskib.png" class="mx-auto mb-3" width="120" alt="Paskibra">
                <h4 class="fw-bold text-white">Paskibra</h4>
                <a href="{{ route('admin.rekap.paskib') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

            <!-- Card 2 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/ec.png" class="mx-auto mb-3" width="120" alt="English Club">
                <h4 class="fw-bold text-white">English Club</h4>
                <a href="{{ route('admin.rekap.ec') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

            <!-- Card 3 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/coding.png" class="mx-auto mb-3" width="120" alt="Coding">
                <h4 class="fw-bold text-white">Coding</h4>
                <a href="{{ route('admin.rekap.coding') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

            <!-- Card 4 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/voly.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Voly</h4>
                <a href="{{ route('admin.rekap.voly') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 5 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/aksara.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Aksara</h4>
                <a href="{{ route('admin.rekap.aksara') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 6 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/basket.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Basket</h4>
                <a href="{{ route('admin.rekap.basket') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 7 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/design.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Design & Printing</h4>
                <a href="{{ route('admin.rekap.design') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>
            
             <!-- Card 8 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/drumband.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Drumband</h4>
                <a href="{{ route('admin.rekap.drumband') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 9 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/fotografi.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Fotografi</h4>
                <a href="{{ route('admin.rekap.fotografi') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 10 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/futsal.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Futsal</h4>
                <a href="{{ route('admin.rekap.futsal') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 11 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/irma.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Irma</h4>
                <a href="{{ route('admin.rekap.irma') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 12 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/karate.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Karate</h4>
                <a href="{{ route('admin.rekap.karate') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 13 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/karawitan.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Karawitan</h4>
                <a href="{{ route('admin.rekap.karawitan') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 14 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/kir.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Kir</h4>
                <a href="{{ route('admin.rekap.kir') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 15 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/padus.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Paduan Suara</h4>
                <a href="{{ route('admin.rekap.padus') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>
            
             <!-- Card 16 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/pmr.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Pmr</h4>
                <a href="{{ route('admin.rekap.pmr') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 17 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/silat.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Pencak Silat</h4>
                <a href="{{ route('admin.rekap.silat') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 18 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/tari.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Seni Tari</h4>
                <a href="{{ route('admin.rekap.tari') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 19 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/tataboga.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Tata Boga</h4>
                <a href="{{ route('admin.rekap.tataboga') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 20 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/tatabusana.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Tata Busana</h4>
                <a href="{{ route('admin.rekap.tatabusana') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 21 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/tatarias.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Tata Rias</h4>
                <a href="{{ route('admin.rekap.tatarias') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>

             <!-- Card 22 -->
            <div class="card shadow-lg text-center border-0 p-3 rounded-4" style="background:#5e8fc9; min-width:230px;">
                <img src="/images/pramuka.png" class="mx-auto mb-3" width="120" alt="Volly">
                <h4 class="fw-bold text-white">Pramuka</h4>
                <a href="{{ route('admin.rekap.pramuka') }}" class="btn mt-3 fw-bold"
                   style="border-radius:20px; background:#b9d8ff; color:#003366;">
                    Lihat Rekap Absensi
                </a>
            </div>
        </div>
    </div>

</div>


    </div>

</div>

@endsection
