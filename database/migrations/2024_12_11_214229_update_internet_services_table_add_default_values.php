<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class UpdateInternetServicesTableAddDefaultValues extends Migration
{
    public function up()
    {
        Schema::table('internet_services', function (Blueprint $table) {
            $table->string('ttd')->default('')->change(); // Menambahkan nilai default
        });
    }

    public function down()
    {
        Schema::table('internet_services', function (Blueprint $table) {
            $table->string('ttd')->default(null)->change();
        });
    }
}

