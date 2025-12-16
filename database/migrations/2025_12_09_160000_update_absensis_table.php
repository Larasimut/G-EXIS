<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::table('absensis', function (Blueprint $table) {
        $table->string('nama')->nullable(false)->change();
        $table->string('ekskul')->nullable(false)->change();
    });
}

public function down()
{
    Schema::table('absensis', function (Blueprint $table) {
        $table->string('nama')->nullable()->change();
        $table->string('ekskul')->nullable()->change();
    });
}

};
