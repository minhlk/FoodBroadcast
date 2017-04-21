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
    		
    		'ten' => 'Hồ Chí Minh',
    		]);
        DB::table('thanhpho')->insert([
    		
    		'ten' => 'Hà nội',
    		]);
		DB::table('thanhpho')->insert([
    		
    		'ten' => 'Hải phong',
    		]);
    }
}
