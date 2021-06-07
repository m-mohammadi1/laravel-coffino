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
                Service::factory()
                    ->has(Count::factory()->count(1))->count(20)
            )->count(2)->create();
    }
}
