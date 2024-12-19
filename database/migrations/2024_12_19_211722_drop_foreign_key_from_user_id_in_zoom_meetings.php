<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('zoom_meetings', function (Blueprint $table) {
            $table->dropForeign(['user_id']); // Hapus constraint kunci asing yang ada
        });
    }

    public function down()
    {
        Schema::table('zoom_meetings', function (Blueprint $table) {
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }
};

