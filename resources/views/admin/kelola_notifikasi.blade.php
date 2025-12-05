@extends('layouts.admin')

@section('title', 'Kelola Notifikasi')

@section('content')

<div class="container mt-4">

    <h2 class="text-center fw-bold" style="color:#1f4b7f;">Stay Updated 🔔</h2>
    <p class="text-center" style="color:#4a6fa1;">Semua aktivitas terbaru muncul di sini.</p>

    <div class="mt-4">

        @php
            $notifs = [
                [
                    'nama' => 'Miss Luzz',
                    'status' => 'Pembina English Club',
                    'pesan' => 'Mengirimkan Foto<br>*Aktivitas English Club hari ini',
                    'gambar' => 'https://i.pravatar.cc/150?img=32',
                    'warna_btn' => 'biru',
                    'text_btn' => 'Sudah ditanggapi'
                ],
                [
                    'nama' => 'Camila',
                    'status' => 'Siswa',
                    'pesan' => 'Pesan:<br>*Min kok pas aku mau tambah ekskul tombolnya gabisa dipencet ya?',
                    'gambar' => 'https://i.pravatar.cc/150?img=12',
                    'warna_btn' => 'abu',
                    'text_btn' => 'Belum ditanggapi'
                ],
                [
                    'nama' => 'Budi Doremi',
                    'status' => 'Pembina Paduan Suara',
                    'pesan' => '*Mengirimkan laporan kegiatan minggu ini.',
                    'gambar' => 'https://i.pravatar.cc/150?img=18',
                    'warna_btn' => 'abu',
                    'text_btn' => 'Belum ditanggapi'
                ],
            ];
        @endphp

        <!-- LOOP NOTIFIKASI -->
        @foreach ($notifs as $n)
        <div class="notif-card mb-4 shadow-sm p-4"
            style="background:#c5d8e8; border-radius:25px; position:relative;">

            <span style="position:absolute; right:20px; top:15px; font-size:40px; color:#084b83;">🔔</span>

            <div class="d-flex align-items-center mb-2">
                <img src="{{ $n['gambar'] }}" class="rounded-circle me-3" width="70" height="70" alt="Foto">
                <div>
                    <h4 class="fw-bold">{{ $n['nama'] }}</h4>
                    <p class="mb-1">Status : {{ $n['status'] }}</p>
                </div>
            </div>

            <p>{!! $n['pesan'] !!}</p>

            <!-- Tombol -->
            <div class="mt-3 d-flex gap-2">

                <!-- KETIKA DITANGGAPI -->
                @if($n['warna_btn'] == 'biru')
                <button class="btn fw-bold text-white"
                    style="background:#4b7bec; border:none; padding:8px 20px; border-radius:15px;">
                    {{ $n['text_btn'] }}
                </button>

                <!-- BELUM DITANGGAPI (auto scroll ke kotak pesan) -->
                @else
                <button class="btn text-white fw-bold btn-belum scroll-to-reply"
                    style="background:#7e8a97; border:none; padding:8px 20px; border-radius:15px;">
                    {{ $n['text_btn'] }}
                </button>
                @endif

                <button class="btn btn-danger fw-bold"
                    style="padding:8px 20px; border-radius:15px;">Hapus</button>
            </div>

        </div>
        @endforeach

        <!-- KOTAK BALASAN -->
        <div id="replyBox" class="mt-4 p-4 rounded-4 shadow-sm" style="background:#e6eef6;">
            <h4 class="fw-bold mb-2" style="color:#1f4b7f;">Jawab Pesan…</h4>
            <textarea class="form-control mb-3" rows="3" placeholder="Ketikkan jawaban kamu..."></textarea>
            <button class="btn fw-bold text-white" style="background:#4c92c3;">Kirim</button>
        </div>

    </div>

</div>

<!-- SCRIPT AUTO SCROLL -->
<script>
    document.querySelectorAll('.scroll-to-reply').forEach(btn => {
        btn.addEventListener('click', function() {
            document.getElementById('replyBox').scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        });
    });
</script>

@endsection
