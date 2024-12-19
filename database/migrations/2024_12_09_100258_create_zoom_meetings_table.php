<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
{
    Schema::create('zoom_meetings', function (Blueprint $table) {
        $table->id();
        $table->foreignId('user_id')->constrained()->onDelete('cascade');
        $table->string('nama_instansi');
        $table->string('nama_pic');
        $table->string('jabatan');
        $table->string('nama_topic_meet');
        $table->integer('jumlah_participant');
        $table->date('jadwal_tgl');
        $table->time('jadwal_jam_mulai');
        $table->time('jadwal_jam_selesai');
        $table->string('nama_petugas_1');
        $table->string('ttd_petugas_1');
        $table->string('nama_petugas_2');
        $table->string('ttd_petugas_2');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('zoom_meetings');
}

};
