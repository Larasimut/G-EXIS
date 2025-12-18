<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
  // database/migrations/xxxx_add_pendaftar_id_to_absensis_table.php
public function up()
{
    Schema::table('absensis', function (Blueprint $table) {
        $table->unsignedBigInteger('pendaftar_id')->after('user_id');
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('absensis', function (Blueprint $table) {
            //
        });
    }
};
