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
        Schema::create('monitorings', function (Blueprint $table) {
            $table->id();
            $table->string('nama_instansi');
            $table->string('nama_pic');
            $table->date('tanggal');
            $table->string('no_hp');
            $table->string('jabatan');
            $table->string('titik_lokasi');
            $table->boolean('isp_backup')->default(false);
            $table->boolean('router_internal')->default(false);
            $table->boolean('switch_internal')->default(false);
            $table->time('waktu_uji_coba');
            $table->time('jam_internetan');
            $table->string('test_speed');
            $table->string('test_switch_internal');
            $table->integer('download_speed');
            $table->integer('upload_speed');
            $table->string('kabel_lan');
            $table->string('aksespoint');
            $table->string('switch_pembagi');
            $table->text('keterangan_kondisi');
            $table->text('topologi');
            $table->string('monitor_1_name');
            $table->string('monitor_2_name');
            $table->string('monitor_1_signature');
            $table->string('monitor_2_signature');
            $table->timestamps();
        });
    }


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('monitorings');
    }
};
