@extends('layouts.admin')

@section('content')

<div class="container mt-4">

    <h3 class="fw-bold mb-4">Edit Data Siswa</h3>

    <form action="{{ route('admin.siswa.update', $siswa->id) }}" method="POST">
        @csrf
        @method('PUT')

        <div class="mb-3">
            <label class="form-label">Username</label>
            <input type="text" name="username" 
                   class="form-control" 
                   value="{{ $siswa->username }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Email</label>
            <input type="email" name="email" 
                   class="form-control" 
                   value="{{ $siswa->email }}" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Password Baru (Opsional)</label>
            <input type="text" name="kode" 
                   class="form-control" 
                   placeholder="Kosongkan jika tidak diganti">
        </div>

        <button class="btn btn-primary">Update</button>
    </form>

</div>

@endsection
