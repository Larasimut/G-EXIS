<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
   public function up()
{
    Schema::create('absensis', function (Blueprint $table) {
        $table->id();
        $table->unsignedBigInteger('siswa_id');
        $table->unsignedBigInteger('ekskul_id');

        $table->enum('kehadiran', ['hadir', 'izin', 'sakit']);
        $table->text('keterangan')->nullable();
        $table->string('foto')->nullable(); // SIMPAN PATH FOTO
        $table->date('tanggal');

        $table->timestamps();

        $table->foreign('siswa_id')->references('id')->on('users')->onDelete('cascade');
        $table->foreign('ekskul_id')->references('id')->on('ekskuls')->onDelete('cascade');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};
