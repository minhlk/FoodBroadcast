<?php

use Illuminate\Database\Seeder;

class monanseeds extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('monan')->insert([
    		'image' => './uploads/im1.jpg',
    		'ten' => 'Cơm sườn Minhlk',
    		'giaMin' => '15000',
    		'giaMax' => '3000',
    		'moTa' => 'món cơm sườn nổi tiếng do đầu bếp trứ danh 	minhlk ...',
    		'soDienThoai' => '0123123123',
    		'thgianBatDau' => '2017-04-20 00:00:00',
    		'thgianKetThuc' => '2017-04-20 00:00:00',
    		]);
        
    }
}
