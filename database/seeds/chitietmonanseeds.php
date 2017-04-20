<?php

use Illuminate\Database\Seeder;

class chitietmonanseeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('chitietmonan')->insert([
    		'idKhuVuc' => '1',
    		'idMonAn' => '1',
    		]);  
        DB::table('chitietmonan')->insert([
            'idKhuVuc' => '2',
            'idMonAn' => '1',
            ]);  
    }
}
