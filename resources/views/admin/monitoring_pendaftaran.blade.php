@extends('layouts.admin')

@section('title', 'Data Pendaftaran Ekskul')

@section('content')
<div class="container py-4">

    <!-- JUDUL HALAMAN -->
    <h2 class="text-center fw-bold mb-4" style="color:#0d3b66;">
        Data Pendaftaran Ekstrakulikuler
    </h2>

    <!-- TABEL DATA -->
    <div class="row justify-content-center">
        <div class="col-md-9">

            <table class="table table-bordered text-center shadow-sm bg-white">
                <thead class="table-light">
                    <tr>
                        <th class="fw-bold">Nama Siswa</th>
                        <th class="fw-bold">Kelas</th>
                        <th class="fw-bold">Ekskul yang di ikuti</th>
                    </tr>
                </thead>

                <tbody>
                    <tr><td>Laras</td><td>XI PPLG 2</td><td>Paskibra</td></tr>
                    <tr><td>Ulfah</td><td>XI PPLG 1</td><td>English Club</td></tr>
                    <tr><td>Devi</td><td>XI PPLG 2</td><td>Volly</td></tr>
                    <tr><td>Mugni</td><td>XI PPLG 2</td><td>Pramuka</td></tr>
                    <tr><td>Cahyani</td><td>XI MPLB 2</td><td>Tatarias</td></tr>
                    <tr><td>Nur</td><td>XI AKL 1</td><td>Tataboga</td></tr>
                    <tr><td>Tika</td><td>XI PM 1</td><td>Paduan Suara</td></tr>
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
