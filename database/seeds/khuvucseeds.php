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
    		'ten' => 'quận 1',
    		]);
        DB::table('khuvuc')->insert([
            'idTP' => '2',
            'ten' => 'quận 2',
            
            ]);

    }
}
