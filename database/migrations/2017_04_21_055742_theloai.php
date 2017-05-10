<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Theloai extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('theloai', function (Blueprint $table) {
            $table->increments('id')->unique();
            $table->integer('id_diadiem')->unsigned(); 
            $table->integer('id_hinhthuc')->unsigned();
            $table->timestamps();

        });
         DB::statement("ALTER TABLE theloai ADD UNIQUE no_duplicate_diadiem_hinhthuc (id_diadiem, id_hinhthuc)");
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('theloai');
    }
}
