<?php

namespace Tests\Feature\Models;

use App\Models\Count;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CountTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insert_data(): void
    {
        $data = Count::factory()->make()->toArray();

        Count::create($data);

        $this->assertDatabaseHas('counts', $data);
    }
}
