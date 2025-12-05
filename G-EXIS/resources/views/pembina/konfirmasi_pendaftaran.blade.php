@extends('pembina.layout', ['title' => 'Konfirmasi Pendaftaran'])

@section('content')
<h4 class="mb-3 fw-bold">Konfirmasi Pendaftaran Siswa</h4>

<div class="shadow card">
    <div class="card-body">

        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th>Nama</th>
                    <th>Kelas</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <!-- Loop data siswa -->
                <tr>
                    <td>Nama Siswa</td>
                    <td>XI RPL</td>
                    <td>
                        <button class="btn btn-success btn-sm">Konfirmasi</button>
                        <button class="btn btn-danger btn-sm">Tolak</button>
                    </td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection
