@extends('layouts.admin')

@section('title', 'Rekap Absensi Silat')

@section('content')

<div class="container mt-4">

    <h2 class="fw-bold text-center" style="color:#1f4b7f;">
        Rekap Absensi Silat
    </h2>

    <p class="text-center mt-2" style="color:#4a6fa1;">
        Berikut adalah daftar kehadiran anggota Silat.
    </p>

    <div class="table-responsive mt-4">
        <table class="table table-bordered table-hover">
            <thead class="text-white" style="background:#1b517d;">
                <tr>
                    <th>No</th>
                    <th>Nama Siswa</th>
                    <th>Tanggal</th>
                    <th>Status</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($rekap as $r)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $r->nama }}</td>
                    <td>{{ $r->tanggal }}</td>
                    <td>
                        <span class="badge 
                            @if($r->status == 'Hadir') bg-success
                            @elseif($r->status == 'Izin') bg-warning
                            @else bg-danger @endif">
                            {{ $r->status }}
                        </span>
                    </td>
                </tr>
                @endforeach
            </tbody>

        </table>
    </div>
    <!-- TOMBOL KEMBALI (diletakkan di luar table, lebih rapi) -->
    <div class="text-center mt-4 mb-4">
        <a href="{{ route('admin.rekap.absen') }}" 
           class="btn btn-primary px-4"
           style="background-color:#0d3b66; border:none; border-radius:20px;">
            Kembali
        </a>
    </div>
    
</div>

@endsection
