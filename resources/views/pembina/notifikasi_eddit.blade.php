@extends('pembina.layout', ['title' => 'Edit Notifikasi'])

@section('content')
<h4 class="mb-3 fw-bold">Edit Notifikasi</h4>

<div class="card shadow">
    <div class="card-body">

        <form action="{{ route('pembina.notifikasi.update', $notifikasi->id) }}"
              method="POST">
            @csrf
            @method('PUT')

            <label class="form-label fw-bold">Isi Pesan</label>
            <textarea name="pesan"
                      class="form-control mb-3"
                      rows="4"
                      required>{{ $notifikasi->pesan }}</textarea>

            <button class="btn btn-primary w-100">
                Simpan Perubahan
            </button>

            <a href="{{ route('pembina.notifikasi') }}"
               class="btn btn-secondary w-100 mt-2">
                Batal
            </a>
        </form>

    </div>
</div>
@endsection
