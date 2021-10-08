<?php

namespace Database\Seeders\General;

use Illuminate\Database\Seeder;

class GeneralsMainSeeder extends Seeder
{

    public function run()
    {
        $this->call(CommentsTableSeeder::class);
        $this->call(CountsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(ServicesTableSeeder::class);
        $this->call(SingleOptionsTableSeeder::class);
        $this->call(UserTableSeeder::class);
    }

}
