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
    		'idKhuVuc' => '1',
    		'tenKhuVuc' => 'Hồ Chí Minh',
    		'mieuTa' => 'Trung tâm việt nam',
    		]);
        DB::table('khuvuc')->insert([
            'idKhuVuc' => '2',
            'tenKhuVuc' => 'Hà nội',
            'mieuTa' => 'Thu đô việt nam',
            ]);

    }
}
