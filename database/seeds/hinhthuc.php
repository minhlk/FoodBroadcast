<?php

use Illuminate\Database\Seeder;

class hinhthuc extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('hinhthuc')->insert([
    		'tenHT' => 'Sang trọng',
    		'mota' => 'rất sang trọng'
    		]);
        DB::table('hinhthuc')->insert([
    		'tenHT' => 'Vỉa hè',
    		'mota' => 'rất vỉa hè'
    		]);
        DB::table('hinhthuc')->insert([
    		'tenHT' => 'Ăn chay',
    		'mota' => 'rất lề đường'
    		]);
        DB::table('hinhthuc')->insert([
            'tenHT' => 'Ăn vặt',
            'mota' => 'rất lề đường'
            ]);
        DB::table('hinhthuc')->insert([
            'tenHT' => 'Khu ẩm thực',
            'mota' => 'rất lề đường'
            ]);
        DB::table('hinhthuc')->insert([
            'tenHT' => 'Tiệc tận nơi',
            'mota' => 'rất lề đường'
            ]);
        DB::table('hinhthuc')->insert([
            'tenHT' => 'Vũ trường',
            'mota' => 'rất lề đường'
            ]);
        DB::table('hinhthuc')->insert([
            'tenHT' => 'Bar',
            'mota' => 'rất lề đường'
            ]);
        DB::table('hinhthuc')->insert([
            'tenHT' => 'Ngoài trời',
            'mota' => 'rất lề đường'
            ]);
    }
}
