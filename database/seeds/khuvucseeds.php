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
            'idTP' => '1',
            'tenKV' => 'quận 2',
            
            ]);
        DB::table('khuvuc')->insert([
            'idTP' => '1',
            'tenKV' => 'quận 3',
            
            ]);
        DB::table('khuvuc')->insert([
            'idTP' => '1',
            'tenKV' => 'quận 4',
            
            ]);
         DB::table('khuvuc')->insert([
            'idTP' => '1',
            'tenKV' => 'quận 5',
            
            ]);
          DB::table('khuvuc')->insert([
            'idTP' => '1',
            'tenKV' => 'quận 6',
            
            ]);
           DB::table('khuvuc')->insert([
            'idTP' => '1',
            'tenKV' => 'quận 7',
            
            ]);
            DB::table('khuvuc')->insert([
            'idTP' => '1',
            'tenKV' => 'quận 8',
            
            ]);
             DB::table('khuvuc')->insert([
            'idTP' => '1',
            'tenKV' => 'quận 9',
            
            ]);
             DB::table('khuvuc')->insert([
            'idTP' => '1',
            'tenKV' => 'quận Tân Bình',
            
            ]);
              DB::table('khuvuc')->insert([
            'idTP' => '1',
            'tenKV' => 'quận Tân Phú',
            
            ]);
              DB::table('khuvuc')->insert([
            'idTP' => '2',
            'tenKV' => ' quận Ba Đình',
            
            ]);
             DB::table('khuvuc')->insert([
            'idTP' => '2',
            'tenKV' => ' quận Cầu Giấy',
            
            ]);
             DB::table('khuvuc')->insert([
            'idTP' => '2',
            'tenKV' => ' quận Long Biên',
            
            ]);
              DB::table('khuvuc')->insert([
            'idTP' => '3',
            'tenKV' => ' quận Ngô Quyền',
            
            ]);
             DB::table('khuvuc')->insert([
            'idTP' => '3',
            'tenKV' => ' quận Đồ Sơn',
            
            ]);
    }
}
