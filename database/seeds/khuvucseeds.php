<?php

use Illuminate\Database\Seeder;

class khuvucseeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('khuvuc')->insert([
    		'idTP' => '1',
    		'tenKV' => 'quận 1',
    		]);
        DB::table('khuvuc')->insert([
            'idTP' => '2',
            'tenKV' => 'quận 2',
            
            ]);
        DB::table('khuvuc')->insert([
            'idTP' => '3',
            'tenKV' => 'quận 3',
            
            ]);
        DB::table('khuvuc')->insert([
            'idTP' => '4',
            'tenKV' => 'quận 4',
            
            ]);
         DB::table('khuvuc')->insert([
            'idTP' => '5',
            'tenKV' => 'quận 5',
            
            ]);
          DB::table('khuvuc')->insert([
            'idTP' => '6',
            'tenKV' => 'quận 6',
            
            ]);
           DB::table('khuvuc')->insert([
            'idTP' => '7',
            'tenKV' => 'quận 7',
            
            ]);
            DB::table('khuvuc')->insert([
            'idTP' => '8',
            'tenKV' => 'quận 8',
            
            ]);
             DB::table('khuvuc')->insert([
            'idTP' => '9',
            'tenKV' => 'quận 9',
            
            ]);
             DB::table('khuvuc')->insert([
            'idTP' => '10',
            'tenKV' => 'quận Tân Bình',
            
            ]);
              DB::table('khuvuc')->insert([
            'idTP' => '11',
            'tenKV' => 'quận Tân Phú',
            
            ]);
    }
}
