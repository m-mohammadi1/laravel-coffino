<?php

namespace Tests\Feature\Models;

use App\Models\Faq;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class FaqTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insert_data()
    {
        $data = Faq::factory()->make()->toArray();

        Faq::create($data);

        $this->assertDatabaseHas('faqs', $data);
    }

}
