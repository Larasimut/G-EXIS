@extends('layouts.admin')

@section('title', 'Ekstrakulikuler & Pembina')

@section('content')

<h2 class="text-center fw-bold mb-4">Ekstrakulikuler & Pembina</h2>

<div class="d-flex justify-content-center">
    <table class="table table-bordered text-center align-middle"
           style="width: 70%; background:white; font-size:18px;">

        <thead style="background:#1e4e79; color:white;">
            <tr>
                <th>Nama Ekskul</th>
                <th>Nama Pembina</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>
            @php
            $data = [
                ['eksul' => 'Paskibra', 'pembina' => 'Ibu Ai'],
                ['eksul' => 'English Club', 'pembina' => 'Ibu Euis'],
                ['eksul' => 'Volly', 'pembina' => 'Pak Adang'],
                ['eksul' => 'Pramuka', 'pembina' => 'Pak Isak'],
                ['eksul' => 'Tatarias', 'pembina' => 'Ibu Retno'],
                ['eksul' => 'Tataboga', 'pembina' => 'Ibu Ade'],
                ['eksul' => 'Paduan Suara', 'pembina' => 'Pak Agus'],
            ];
            @endphp

            @foreach ($data as $row)
            <tr>
                <td>{{ $row['eksul'] }}</td>
                <td>{{ $row['pembina'] }}</td>

                <td>
                    <a href="#" class="text-danger fs-3">
                        <i class="bi bi-trash"></i>
                    </a>
                </td>
            </tr>
            @endforeach

        </tbody>
    </table>
</div>

<!-- Tombol Kembali -->
<div class="text-center mt-4">
    <a href="{{ route('admin.monitoring') }}"
       class="btn px-5 py-2"
       style="background:#1e4e79; color:white; border-radius:25px;">
        Kembali
    </a>
</div>

@endsection
