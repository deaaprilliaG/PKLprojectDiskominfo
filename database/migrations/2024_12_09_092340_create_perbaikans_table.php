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
    Schema::create('perbaikans', function (Blueprint $table) {
        $table->id();
        $table->string('nama_instansi');
        $table->string('alamat_pic');
        $table->date('tanggal');
        $table->string('no_hp');
        $table->string('tipe');
        $table->string('id_pelapor');
        $table->boolean('sumber_internet');
        $table->boolean('switch_internal');
        $table->string('perangkat_alat');
        $table->text('keterangan_kondisi');
        $table->text('keterangan_perbaikan');
        $table->string('petugas_nama');
        $table->string('petugas_tanda_tangan');
        $table->integer('download_speed');
        $table->integer('upload_speed');
        $table->timestamps();
    });
}

public function down()
{
    Schema::dropIfExists('perbaikans');
}

};
