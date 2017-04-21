<?php

use Illuminate\Database\Seeder;

class theloai extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       DB::table('thanhpho')->insert([
    		
    		'idDiaDiem' => '1',
    		'idHinhThuc' => '1',
    		]);
    }
}
