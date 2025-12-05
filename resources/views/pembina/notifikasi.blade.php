@extends('pembina.layout', ['title' => 'Notifikasi'])

@section('content')
<h4 class="mb-3 fw-bold">Kelola Notifikasi</h4>

<div class="shadow card">
    <div class="card-body">

       <form action="{{ route('pembina.notifikasi.store') }}" method="POST" class="mb-4">
    @csrf

    <label class="form-label fw-bold">Isi Pesan</label>
    <textarea name="pesan" class="form-control mb-3" rows="3" placeholder="Tulis isi pesan"></textarea>

    <button class="btn btn-success w-100">Kirim Notifikasi</button>
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
