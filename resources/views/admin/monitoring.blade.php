@extends('layouts.admin')

@section('title', 'Monitoring Ekstrakurikuler')

@section('content')

    <h2 class="text-center fw-bold mb-4">Monitoring Ekstrakurikuler</h2>

    <!-- Menu 1 -->
<div class="menu-box mb-3 d-flex justify-content-between align-items-center p-4 rounded-4"
     style="background:#5d9ad6; color:white;">
    <h4 class="fw-bold">Ekstrakulikuler & Pembina 🎷</h4>

    <a href="{{ route('admin.monitoring.ekskul.pembina') }}"
       class="btn px-4 py-2 text-white"
       style="background:#173f63; border-radius:25px;">
        Lihat
    </a>
</div>

<!-- Menu 2 -->
<div class="menu-box mb-3 d-flex justify-content-between align-items-center p-4 rounded-4"
     style="background:#5d9ad6; color:white;">
    <h4 class="fw-bold">Jadwal Ekstrakulikuler ⏰</h4>

    <a href="{{ route('admin.monitoring.ekskul') }}" 
       class="btn px-4 py-2 text-white"
       style="background:#173f63; border-radius:25px;">
        Lihat
    </a>
</div>


    <!-- Menu 3 -->
    <div class="menu-box mb-3 d-flex justify-content-between align-items-center p-4 rounded-4"
         style="background:#5d9ad6; color:white;">
        <h4 class="fw-bold">Data Pendaftaran Ekstrakulikuler 📁</h4>

        <a href="{{ route('admin.monitoring.pendaftaran') }}" 
       class="btn px-4 py-2 text-white"
       style="background:#173f63; border-radius:25px;">
        Lihat
    </a>
</div>

    <!-- Menu 4 -->
    <div class="menu-box mb-3 d-flex justify-content-between align-items-center p-4 rounded-4"
         style="background:#5d9ad6; color:white;">
        <h4 class="fw-bold">Reward Siswa Berprestasi 🏆</h4>

       <a href="{{ route('admin.monitoring.reward') }}" 
       class="btn px-4 py-2 text-white"
       style="background:#173f63; border-radius:25px;">
        Lihat
    </a>
</div>

@endsection
