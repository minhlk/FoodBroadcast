<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Monantable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('monan', function (Blueprint $table) {
            $table->increments('idMonAn');
            $table->string('image');
            $table->string('ten');
            $table->integer('giaMin');
            $table->integer('giaMax');
            // $table->integer('idKhuVuc');
            $table->string('moTa')->nullable();
            $table->integer('soDienThoai');
            // $table->integer('idTag')->nullable();
            $table->dateTime('thgianBatDau');
            $table->dateTime('thgianKetThuc');
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
       Schema::drop('monan');
    }
}
