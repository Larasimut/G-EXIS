@extends('pembina.layout', ['title' => 'Notifikasi'])

@section('content')
<h4 class="mb-3 fw-bold">Kelola Notifikasi</h4>

<div class="shadow card">
    <div class="card-body">

        <form class="mb-4">
            <label class="form-label fw-bold">Buat Notifikasi Baru</label>
            <textarea class="mb-2 form-control" rows="3"></textarea>
            <button class="btn btn-success">Kirim Notifikasi</button>
        </form>

        <hr>

        <h5 class="mt-4 fw-bold">Daftar Notifikasi</h5>

        <ul class="list-group">
            <li class="list-group-item d-flex justify-content-between">
                Informasi kegiatan terbaru
                <button class="btn btn-danger btn-sm">Hapus</button>
            </li>
        </ul>

    </div>
</div>
@endsection
