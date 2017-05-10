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
       DB::table('theloai')->insert([
    		
    		'id_diadiem' => '1',
    		'id_hinhthuc' => '1',
    		]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '1',
            'id_hinhthuc' => '2',
            ]);
    }
}
