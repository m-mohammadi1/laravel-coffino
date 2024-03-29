<?php

namespace Tests\Feature\Controllers\Front;

use App\Models\Comment;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\Feature\Controllers\DatabaseHandler;
use Tests\TestCase;

class PageControllerTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations, DatabaseHandler;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_home_method()
    {

        $this->withoutExceptionHandling();
        $response = $this->get(route('home'));

        $response->assertStatus(200);
        $response->assertViewHas('comments');
    }


}
