<?php

namespace Database\Seeders\General;

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
                Service::factory()
                    ->has(Count::factory()->count(1))->count(5)
            )->count(10)->create();
    }
}
