<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // siswa yang absen
            $table->string('kehadiran'); // hadir / izin / sakit
            $table->text('keterangan')->nullable(); // alasan
            $table->string('foto')->nullable(); // foto hasil kamera
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
