<?php

namespace Tests\Feature\Models;

use App\Models\Category;
use App\Models\Count;
use App\Models\Service;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class ServiceTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations, ModelHelperTesting;


    public function test_service_relationship_with_category()
    {
        $service = Service::factory()
            ->for(Category::factory())
            ->create();

        $this->assertTrue(isset($service->category->id));
        $this->assertTrue($service->category instanceof Category);
    }

//    public function test_service_relationship_with_count()
//    {
//        $count = rand(1, 10);
//
//        $services = Service::factory()
//            ->count(3)
//            ->for(Count::factory()->count($count))
//            ->create();
//
//        dd($services->counts);
//        $this->assertCount($count, $services->first()->counts);
//        $this->assertTrue($services->first()->counts->first() instanceof Count);
//    }



    protected function model(): Model
    {
        return new Service();
    }
}
