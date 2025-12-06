@extends('pembina.layout', ['title' => 'Rekap Absen'])

@section('content')
<h4 class="mb-3 fw-bold">Rekap Absen Ekskul</h4>

<div class="shadow card">
    <div class="card-body">

       <a href="{{ route('rekap.download') }}" class="btn btn-success">
    Download Rekapan (Excel)
</a>


        <table class="table table-bordered">
            <thead class="table-success">
                <tr>
                    <th>Nama</th>
                    <th>Hadir</th>
                    <th>Tidak Hadir</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Nama Siswa</td>
                    <td>10</td>
                    <td>2</td>
                </tr>
            </tbody>
        </table>

    </div>
</div>
@endsection
