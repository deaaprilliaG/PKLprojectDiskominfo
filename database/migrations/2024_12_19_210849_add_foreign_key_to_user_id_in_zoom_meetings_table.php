<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::table('zoom_meetings', function (Blueprint $table) {
            if (!Schema::hasColumn('zoom_meetings', 'user_id')) {
                $table->foreign('user_id', 'zoom_meetings_user_id_foreign_new')->references('id')->on('users')->onDelete('cascade');
            }
        });
    }

    public function down()
    {
        Schema::table('zoom_meetings', function (Blueprint $table) {
            $table->dropForeign(['zoom_meetings_user_id_foreign_new']);
        });
    }
};


