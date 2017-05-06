<?php

use Illuminate\Database\Seeder;

class giohang extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('giohang')->insert([
    		'idUser' => '1',
    		'idDiaDiem' => '1',
    		]);
         DB::table('giohang')->insert([
    		'idUser' => '1',
    		'idDiaDiem' => '2',
    		]);
    }
}
