<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(thanhpho::class);
        $this->call(khuvucseeds::class);
        $this->call(diadiem::class);
        $this->call(hinhthuc::class);
        $this->call(theloai::class);
    }
}
