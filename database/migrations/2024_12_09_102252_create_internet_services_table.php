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
        Schema::create('internet_services', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->string('nama_instansi');
            $table->string('nama_pic');
            $table->string('jabatan');
            $table->date('tanggal');
            $table->string('no_hp');
            $table->string('ttd');
            $table->string('nama_kegiatan');
            $table->string('bandwidth');
            $table->date('jadwal_tgl');
            $table->time('jadwal_jam_mulai');
            $table->time('jadwal_jam_selesai');
            $table->string('petugas_1_nama');
            $table->string('petugas_1_ttd');
            $table->string('petugas_2_nama');
            $table->string('petugas_2_ttd');
            $table->timestamps();
        });
    }

public function down()
    {
        Schema::dropIfExists('internet_services');
    }

};
