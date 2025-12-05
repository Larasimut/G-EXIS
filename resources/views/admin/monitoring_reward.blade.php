@extends('layouts.admin')

@section('title', 'Reward Siswa')

@section('content')
<div class="container mt-4">

    <h2 class="text-center fw-bold mb-4" style="color:#1f4b7f;">
        Daftar Reward Siswa Berprestasi
    </h2>

    <div class="card shadow-sm border-0 rounded-4 p-4">

        <div class="table-responsive">
            <table class="table table-bordered text-center align-middle">
                <thead class="table-primary">
                    <tr>
                        <th class="fw-bold">Nama Siswa</th>
                        <th class="fw-bold">Kelas</th>
                        <th class="fw-bold">Ekskul yang di ikuti</th>
                    </tr>
                </thead>

                <tbody>
                    <tr>
                        <td>Laras</td>
                        <td>XI PPLG 2</td>
                        <td>Paskibra</td>
                    </tr>
                    <tr>
                        <td>Ulfah</td>
                        <td>XI PPLG 1</td>
                        <td>English Club</td>
                    </tr>
                    <tr>
                        <td>Devi</td>
                        <td>XI PPLG 2</td>
                        <td>Volly</td>
                    </tr>
                    <tr>
                        <td>Mugni</td>
                        <td>XI PPLG 2</td>
                        <td>Pramuka</td>
                    </tr>
                    <tr>
                        <td>Cahyani</td>
                        <td>XI MPLB 2</td>
                        <td>Tatarias</td>
                    </tr>
                    <tr>
                        <td>Nur</td>
                        <td>XI AKL 1</td>
                        <td>Tataboga</td>
                    </tr>
                    <tr>
                        <td>Tika</td>
                        <td>XI PM 1</td>
                        <td>Paduan Suara</td>
                    </tr>
                </tbody>

            </table>
        </div>

        <div class="text-center mt-4">
            <a href="{{ route('admin.monitoring') }}" class="btn px-5 py-2 fw-bold"
               style="background:#1f4b7f; color:white; border-radius:25px;">
                Kembali
            </a>
        </div>
    </div>
</div>
@endsection
