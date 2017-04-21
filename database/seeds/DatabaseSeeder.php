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
        $this->call(monanseeds::class);
        $this->call(khuvucseeds::class);
        $this->call(chitietmonanseeds::class);
    }
}
