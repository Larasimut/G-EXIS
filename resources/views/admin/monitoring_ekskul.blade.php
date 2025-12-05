@extends('layouts.admin')

@section('title', 'Monitoring Ekskul')

@section('content')
<div class="container py-4">

    <!-- JUDUL HALAMAN -->
    <h2 class="text-center fw-bold mb-4" style="color:#0d3b66;">
        Jadwal Ekstrakulikuler
    </h2>

    <!-- TABEL -->
    <div class="row justify-content-center">
        <div class="col-md-8">

            <table class="table table-bordered text-center shadow-sm bg-white">
                <thead class="table-light">
                    <tr>
                        <th class="fw-bold">Nama Ekskul</th>
                        <th class="fw-bold">Jadwal Ekskul</th>
                    </tr>
                </thead>

                <tbody>
                    <tr><td>Paskibra</td><td>Selasa</td></tr>
                    <tr><td>English Club</td><td>Selasa</td></tr>
                    <tr><td>Volly</td><td>Kamis</td></tr>
                    <tr><td>Pramuka</td><td>Jumat</td></tr>
                    <tr><td>Tatarias</td><td>Rabu</td></tr>
                    <tr><td>Tataboga</td><td>Kamis</td></tr>
                    <tr><td>Paduan Suara</td><td>Senin</td></tr>
                </tbody>
            </table>

            <!-- TOMBOL KEMBALI -->
            <div class="text-center mt-4">
                <a href="{{ route('admin.monitoring') }}" 
                   class="btn btn-primary px-4"
                   style="background-color:#0d3b66; border:none; border-radius:20px;">
                    Kembali
                </a>
            </div>

        </div>
    </div>

</div>
@endsection
