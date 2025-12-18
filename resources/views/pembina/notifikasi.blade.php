@extends('pembina.layout', ['title' => 'Notifikasi'])

@section('content')
<h4 class="mb-3 fw-bold">Kelola Notifikasi</h4>

<div class="shadow card">
    <div class="card-body">

        {{-- FORM KIRIM NOTIFIKASI --}}
        <form action="{{ route('pembina.notifikasi.store') }}" method="POST" class="mb-4">
            @csrf

            <label class="form-label fw-bold">Isi Pesan</label>
            <textarea name="pesan"
                      class="form-control mb-3"
                      rows="3"
                      placeholder="Tulis isi pesan"
                      required></textarea>

            <button class="btn btn-success w-100">
                Kirim Notifikasi
            </button>
        </form>

        <hr>

        <h5 class="mt-4 fw-bold">Daftar Notifikasi</h5>

        <ul class="list-group">
            @forelse($notifikasi as $n)
                <li class="list-group-item d-flex justify-content-between align-items-center">

                    <span>{{ $n->pesan }}</span>

                    <div class="d-flex gap-2">
                        {{-- TOMBOL EDIT --}}
                        <a href="{{ route('pembina.notifikasi.edit', $n->id) }}"
                           class="btn btn-warning btn-sm">
                            Edit
                        </a>

                        {{-- TOMBOL HAPUS --}}
                        <form action="{{ route('pembina.notifikasi.destroy', $n->id) }}"
                              method="POST"
                              onsubmit="return confirm('Hapus notifikasi ini?')">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger btn-sm">
                                Hapus
                            </button>
                        </form>
                    </div>

                </li>
            @empty
                <li class="list-group-item text-center text-muted">
                    Belum ada notifikasi
                </li>
            @endforelse
        </ul>

    </div>
</div>
@endsection
