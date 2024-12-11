<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateZoomMeetingsTableAddDefaultValues extends Migration
{
    public function up()
    {
        Schema::table('zoom_meetings', function (Blueprint $table) {
            $table->string('ttd_petugas_1')->default('')->change();
            $table->string('ttd_petugas_2')->default('')->change(); // Lakukan hal yang sama untuk ttd_petugas_2 jika diperlukan
        });
    }

    public function down()
    {
        Schema::table('zoom_meetings', function (Blueprint $table) {
            $table->string('ttd_petugas_1')->default(null)->change();
            $table->string('ttd_petugas_2')->default(null)->change(); // Lakukan hal yang sama untuk ttd_petugas_2 jika diperlukan
        });
    }
}

