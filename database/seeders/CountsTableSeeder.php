<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Count;
use App\Models\Service;
use Illuminate\Database\Seeder;

class CountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::factory()
            ->has(
                Count::factory()
                    ->has(Service::factory()->count(50))->count(4)
            )->count(2)->create();
    }
}
