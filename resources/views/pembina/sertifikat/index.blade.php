@extends('pembina.layout', ['title' => 'Sertifikat'])

@section('content')
<h4 class="mb-3 fw-bold">Buat Sertifikat</h4>

@if(session('success'))
<div class="alert alert-success">{{ session('success') }}</div>
@endif

<div class="mb-4 shadow card">
    <div class="card-body">

        <form action="{{ route('pembina.sertifikat.generate') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label class="fw-semibold">Nama Siswa</label>
                <input type="text" name="nama" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="fw-semibold">Kegiatan</label>
                <input type="text" name="kegiatan" class="form-control" required>
            </div>

            <div class="mb-3">
                <label class="fw-semibold">Tanggal</label>
                <input type="date" name="tanggal" class="form-control" required>
            </div>

            <button class="px-4 btn btn-success">Buat Sertifikat</button>
        </form>

    </div>
</div>

<h4 class="mb-3 fw-bold">Riwayat Sertifikat</h4>

<div class="shadow card">
    <div class="card-body">

        <table class="table table-bordered">
            <thead class="table-light">
                <tr>
                    <th>Nama</th>
                    <th>Kegiatan</th>
                    <th>Tanggal</th>
                    <th>Aksi</th>
                </tr>
            </thead>

           <tbody>
    @forelse($certificates as $c)
    <tr>
        <td>{{ $c->nama }}</td>
        <td>{{ $c->kegiatan }}</td>
        <td>{{ $c->tanggal }}</td>
        <td>
            <a href="{{ route('pembina.sertifikat.preview', $c->id) }}" 
               class="btn btn-primary btn-sm">
               Lihat
            </a>

            <form action="{{ route('pembina.sertifikat.destroy', $c->id) }}" 
                  method="POST" 
                  class="d-inline"
                  onsubmit="return confirm('Yakin ingin menghapus sertifikat ini?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger btn-sm">Hapus</button>
            </form>
        </td>
    </tr>
    @empty
    <tr>
        <td colspan="4" class="text-center text-muted">
            Belum ada sertifikat dibuat.
        </td>
    </tr>
    @endforelse
</tbody>

        </table>

    </div>
</div>

@endsection
