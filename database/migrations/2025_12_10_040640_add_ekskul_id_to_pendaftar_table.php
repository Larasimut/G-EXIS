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
    Schema::table('pendaftar', function (Blueprint $table) {
        $table->unsignedBigInteger('ekskul_id')->nullable()->after('kelas');
    });
}

public function down()
{
    Schema::table('pendaftar', function (Blueprint $table) {
        $table->dropColumn('ekskul_id');
    });
}

};
