<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('monitorings', function (Blueprint $table) {
            if (!Schema::hasColumn('monitorings', 'user_id')) {
                $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Menambahkan kolom user_id jika belum ada
            }
        });
    }

    public function down()
    {
        Schema::table('monitorings', function (Blueprint $table) {
            if (Schema::hasColumn('monitorings', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
        });
    }
};

