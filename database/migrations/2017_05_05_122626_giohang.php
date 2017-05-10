<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Giohang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
         Schema::create('giohang', function (Blueprint $table) {
            $table->integer('idUser');
            $table->integer('idDiaDiem');
            $table->timestamps();
        });
         DB::statement("ALTER TABLE giohang ADD UNIQUE no_duplicate_phase_and_user (idUser, idDiaDiem)");

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
          Schema::drop('khuvuc');
    }
}
