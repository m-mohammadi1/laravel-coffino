<?php

namespace Database\Seeders\General;

use App\Models\Service;
use App\Models\Category;
use Illuminate\Database\Seeder;

class ServicesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
            ->has(Service::factory()->count(5))
            ->count(2)
            ->create();
    }
}
