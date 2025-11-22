@extends('pembina.layout', ['title' => 'Absen Siswa'])

@section('content')
<h4 class="mb-3 fw-bold">Konfirmasi Absen Siswa</h4>

<div class="shadow card">
    <div class="card-body">
        <table class="table table-hover">
            <thead class="table-success">
                <tr>
                    <th>Foto Absen</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Aksi</th>
                </tr>
            </thead>

            <tbody>
                <tr>
                    <td><img src="https://via.placeholder.com/80" class="img-thumbnail"></td>
                    <td>Nama Siswa</td>
                    <td>Belum dikonfirmasi</td>
                    <td>
                        <button class="btn btn-success btn-sm">Hadir</button>
                        <button class="btn btn-danger btn-sm">Tidak Hadir</button>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection
