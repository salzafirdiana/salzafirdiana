<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(produkTableSeeder::class);
    }
}