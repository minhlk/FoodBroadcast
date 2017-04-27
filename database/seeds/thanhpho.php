<?php

use Illuminate\Database\Seeder;

class thanhpho extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('thanhpho')->insert([
    		
    		'tenTP' => 'Hồ Chí Minh',
    		]);
        DB::table('thanhpho')->insert([
    		
    		'tenTP' => 'Hà nội',
    		]);
		DB::table('thanhpho')->insert([
    		
    		'tenTP' => 'Hải phong',
    		]);
    }
}
