<?php

namespace Database\Seeders;

use Database\Seeders\Auth\AuthMainSeeder;
use Database\Seeders\General\GeneralsMainSeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AuthMainSeeder::class);
        $this->call(GeneralsMainSeeder::class);
    }
}
