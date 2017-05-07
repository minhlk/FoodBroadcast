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
        DB::table('theloai')->insert([
            
            'id_diadiem' => '1',
            'id_hinhthuc' => '3',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '1',
            'id_hinhthuc' => '4',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '2',
            'id_hinhthuc' => '1',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '2',
            'id_hinhthuc' => '2',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '2',
            'id_hinhthuc' => '3',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '2',
            'id_hinhthuc' => '4',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '3',
            'id_hinhthuc' => '1',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '3',
            'id_hinhthuc' => '5',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '3',
            'id_hinhthuc' => '6',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '3',
            'id_hinhthuc' => '7',
            ]);
            
        DB::table('theloai')->insert([
            
            'id_diadiem' => '4',
            'id_hinhthuc' => '1',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '4',
            'id_hinhthuc' => '5',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '4',
            'id_hinhthuc' => '6',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '4',
            'id_hinhthuc' => '7',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '5',
            'id_hinhthuc' => '1',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '5',
            'id_hinhthuc' => '8',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '5',
            'id_hinhthuc' => '3',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '5',
            'id_hinhthuc' => '2',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '6',
            'id_hinhthuc' => '4',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '6',
            'id_hinhthuc' => '7',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '6',
            'id_hinhthuc' => '8',
            ]);
        DB::table('theloai')->insert([
            
            'id_diadiem' => '6',
            'id_hinhthuc' => '3',
            ]);
    }
}
