<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Diadiem extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diadiem', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('idTP');
            $table->integer('idKhuVuc');
            $table->string('image');
            $table->string('ten');
            $table->integer('giaMin');          
            $table->integer('giaMax');
            $table->string('diaChi')->nullable();
            $table->string('moTa')->nullable();
            $table->string('trangWeb')->nullable();
            $table->integer('soDienThoai');
            $table->integer('gioBatDau');
            $table->integer('phutBatDau');
            $table->integer('gioKetThuc');
            $table->integer('phutKetThuc');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
       Schema::drop('diadiem');
    }
}
