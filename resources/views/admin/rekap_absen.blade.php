@extends('layouts.admin')

@section('title', 'Rekap Absensi Ekskul')

@section('content')
<style>
    .logo-bulat {
        width: 120px;
        height: 120px;
        border-radius: 50%;
        object-fit: cover;
        background: white;
        margin: 0 auto 15px;
        display: block;
    }

    /* Style Card Ekskul */
    .ekskul-card {
        background: #5e8fc9;
        min-width: 230px;
        transition: all .25s ease-in-out;
        border-radius: 22px !important;
    }

    .ekskul-card:hover {
        transform: translateY(-6px);
        box-shadow: 0 8px 22px rgba(0,0,0,0.25) !important;
    }

    /* Tombol */
    .ekskul-btn {
        border-radius: 20px;
        background: #b9d8ff;
        color: #003366;
        font-weight: bold;
        transition: .25s;
    }

    .ekskul-btn:hover {
        background: #d8e9ff;
        color: #00264d;
    }

    /* Scroll Horizontal */
    .scroll-container {
        overflow-x: auto;
        padding-bottom: 6px;
    }

    .scroll-inner {
        display: flex;
        flex-wrap: nowrap;
        gap: 16px;
        min-width: max-content;
    }
</style>

<div class="container mt-4">

    <h2 class="text-center fw-bold" style="color:#1f4b7f;">
        Rekap Absensi Ekstrakurikuler Siswa
    </h2>

    <p class="text-center mt-2" style="color:#4a6fa1;">
        Halaman ini menampilkan catatan kehadiran siswa dalam setiap ekstrakurikuler.
        <br>Data dicatat langsung oleh pembina ekskul masing-masing.
    </p>

    <div class="mt-4 scroll-container">
        <div class="scroll-inner px-2">

            {{-- Daftar Ekskul --}}
            @php
                $ekskulList = [
                    ['img'=>'paskib.png','nama'=>'Paskibra','route'=>'paskib'],
                    ['img'=>'ec.png','nama'=>'English Club','route'=>'ec'],
                    ['img'=>'coding.png','nama'=>'Coding','route'=>'coding'],
                    ['img'=>'voly.png','nama'=>'Voly','route'=>'voly'],
                    ['img'=>'aksara.png','nama'=>'Aksara','route'=>'aksara'],
                    ['img'=>'basket.png','nama'=>'Basket','route'=>'basket'],
                    ['img'=>'designn.jpg','nama'=>'Design & Printing','route'=>'design'],
                    ['img'=>'drumband.png','nama'=>'Drumband','route'=>'drumband'],
                    ['img'=>'fotografi.png','nama'=>'Fotografi','route'=>'fotografi'],
                    ['img'=>'futsal.png','nama'=>'Futsal','route'=>'futsal'],
                    ['img'=>'irma.png','nama'=>'Irma','route'=>'irma'],
                    ['img'=>'karatee.jpg','nama'=>'Karate','route'=>'karate'],
                    ['img'=>'karawitan.png','nama'=>'Karawitan','route'=>'karawitan'],
                    ['img'=>'kir.png','nama'=>'Kir','route'=>'kir'],
                    ['img'=>'padus.png','nama'=>'Paduan Suara','route'=>'padus'],
                    ['img'=>'pmr.png','nama'=>'PMR','route'=>'pmr'],
                    ['img'=>'silat.png','nama'=>'Pencak Silat','route'=>'silat'],
                    ['img'=>'tari.png','nama'=>'Seni Tari','route'=>'tari'],
                    ['img'=>'tatabogaa.jpg','nama'=>'Tata Boga','route'=>'tataboga'],
                    ['img'=>'tatabusanaa.jpg','nama'=>'Tata Busana','route'=>'tatabusana'],
                    ['img'=>'tatariass.jpg','nama'=>'Tata Rias','route'=>'tatarias'],
                    ['img'=>'pramukaa.jpg','nama'=>'Pramuka','route'=>'pramuka'],
                ];
            @endphp

            {{-- Render Semua Card --}}
            @foreach ($ekskulList as $e)
                <div class="card shadow-lg text-center border-0 p-3 ekskul-card">
                    <img src="/images/{{ $e['img'] }}" class="logo-bulat" alt="{{ $e['nama'] }}">
                    <h4 class="fw-bold text-white">{{ $e['nama'] }}</h4>

                    <a href="{{ route('admin.rekap.' . $e['route']) }}" 
                       class="btn ekskul-btn mt-3">
                        Lihat Rekap Absensi
                    </a>
                </div>
            @endforeach

        </div>
    </div>

</div>
@endsection
