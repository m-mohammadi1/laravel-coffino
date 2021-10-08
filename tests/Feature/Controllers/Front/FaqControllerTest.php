<?php

namespace Tests\Feature\Controllers\Front;

use Database\Seeders\DatabaseSeeder;
use Database\Seeders\General\FaqsTableSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FaqControllerTest extends TestCase
{
    use DatabaseMigrations, RefreshDatabase;

    protected function setUp(): void
    {
        parent::setUp();
        $this->seed(DatabaseSeeder::class);
    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_method()
    {
        $response = $this->get(route('faqs'));

        $response->assertStatus(200);
        $response->assertViewIs('front.pages.faqs');
        $response->assertViewHas('faqs');
    }
}
