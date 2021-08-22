<?php

namespace Tests\Feature\Models;

use App\Models\Category;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations, ModelHelperTesting;

    public function test_category_relationship_with_service()
    {
        $count = rand(1, 10);

        $category = Category::factory()
            ->has(Service::factory()->count($count))
            ->create();

        $this->assertCount($count, $category->services);
        $this->assertInstanceOf(Service::class, $category->services->first());
    }

    protected function model(): Model
    {
        return new Category();
    }
}
