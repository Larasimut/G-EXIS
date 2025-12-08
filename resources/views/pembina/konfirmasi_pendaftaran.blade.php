@extends('pembina.layout')

@section('content')

<div class="container mt-4">

    <h3 class="mb-3">Daftar Pendaftar Ekstrakurikuler</h3>

    <table class="table table-bordered table-striped">
        <thead>
            <tr>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Ekskul</th>
                <th>Alasan</th>
                <th>Kontak</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $d)
            <tr>
                <td>{{ $d->nama }}</td>
                <td>{{ $d->kelas }}</td>
                <td>{{ $d->ekskul }}</td>

                {{-- Tambahan baru --}}
                <td>{{ $d->alasan }}</td>
                <td>{{ $d->kontak }}</td>

                <td>
                    <form action="{{ route('pembina.terima', $d->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-success btn-sm">Terima</button>
                    </form>

                    <form action="{{ route('pembina.tolak', $d->id) }}" method="POST" class="d-inline">
                        @csrf
                        <button class="btn btn-danger btn-sm">Tolak</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td colspan="6" class="text-center">Belum ada pendaftar</td>
            </tr>
            @endforelse
        </tbody>
    </table>

</div>

@endsection
