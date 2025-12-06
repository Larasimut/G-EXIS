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
    Schema::table('ekskuls', function (Blueprint $table) {
        $table->unsignedBigInteger('pembina_id')->nullable()->after('id');

        $table->foreign('pembina_id')
              ->references('id')
              ->on('users')
              ->onDelete('cascade');
    });
}

public function down()
{
    Schema::table('ekskuls', function (Blueprint $table) {
        $table->dropForeign(['pembina_id']);
        $table->dropColumn('pembina_id');
    });
}

};
