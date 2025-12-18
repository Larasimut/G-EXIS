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
    Schema::table('notifications', function (Blueprint $table) {
        $table->unsignedBigInteger('pengirim_id')->nullable();
        $table->string('pengirim_nama')->nullable();
        $table->string('ekskul')->nullable();
    });
}

public function down()
{
    Schema::table('notifications', function (Blueprint $table) {
        $table->dropColumn(['pengirim_id', 'pengirim_nama', 'ekskul']);
    });
}

};
