@extends('layouts.admin')

@section('title', 'Edit Notifikasi')

@section('content')

<div class="container mt-4" style="max-width:700px">

    <h2 class="fw-bold mb-2">Edit Notifikasi</h2>
    <p class="text-muted mb-4">
        Admin dapat memperbaiki isi notifikasi sebelum atau sesudah diterima siswa.
    </p>

    <div class="card shadow-sm" style="border-radius:18px">
        <div class="card-body p-4">

            <form action="{{ route('admin.kelola.notifikasi.update', $notif->id) }}"
                  method="POST">
                @csrf
                @method('PUT')

                <label class="form-label fw-bold">Isi Notifikasi</label>
                <textarea name="pesan"
                          class="form-control mb-3"
                          rows="5"
                          required>{{ old('pesan', $notif->pesan) }}</textarea>

                <div class="d-flex justify-content-end gap-2">
                    <a href="{{ route('admin.kelola.notifikasi') }}"
                       class="btn btn-light">
                        Batal
                    </a>

                    <button class="btn btn-primary px-4">
                        Simpan Perubahan
                    </button>
                </div>

            </form>

        </div>
    </div>

</div>

@endsection
