<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('perbaikans', function (Blueprint $table) {
            if (!Schema::hasColumn('perbaikans', 'user_id')) {
                $table->foreignId('user_id')->constrained()->onDelete('cascade'); // Menambahkan kolom user_id jika belum ada
            }
        });
    }

    public function down()
    {
        Schema::table('perbaikans', function (Blueprint $table) {
            if (Schema::hasColumn('perbaikans', 'user_id')) {
                $table->dropForeign(['user_id']);
                $table->dropColumn('user_id');
            }
        });
    }
};

