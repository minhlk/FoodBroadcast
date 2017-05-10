<?php

use Illuminate\Database\Seeder;

class diadiem extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('diadiem')->insert([
    		'idTP' => '1',
    		'idKhuVuc' => '1',
    		'image' => './uploads/im4.jpg',
    		'ten' => 'Quán ăn gia đình 123',
    		'giaMin' => '10000',
    		'giaMax' => '100000',
    		'diaChi' => 'unknown',
    		'moTa' => 'updating',
    		'trangWeb' => 'google.com',
    		'soDienThoai' => '01234543',
    		'gioBatDau' => '7',
    		'phutBatDau' => '30',
    		'gioKetThuc' => '19',
    		'phutKetThuc' => '0',
    		]);
         DB::table('diadiem')->insert([
            'idTP' => '2',
            'idKhuVuc' => '2',
            'image' => './uploads/im3.jpg',
            'ten' => 'Caffe',
            'giaMin' => '10000',
            'giaMax' => '100000',
            'diaChi' => 'unknown',
            'moTa' => 'updating',
            'trangWeb' => 'google.com',
            'soDienThoai' => '01234543',
            'gioBatDau' => '7',
            'phutBatDau' => '30',
            'gioKetThuc' => '19',
            'phutKetThuc' => '0',
            ]);
         DB::table('diadiem')->insert([
            'idTP' => '3',
            'idKhuVuc' => '3',
            'image' => './uploads/im1.jpg',
            'ten' => 'Cơm sườn bao mắc',
            'giaMin' => '1000',
            'giaMax' => '1000000',
            'diaChi' => 'unknown',
            'moTa' => 'updating',
            'trangWeb' => 'google.com',
            'soDienThoai' => '01234543',
            'gioBatDau' => '7',
            'phutBatDau' => '30',
            'gioKetThuc' => '19',
            'phutKetThuc' => '0',
            ]);
         
    }
}
