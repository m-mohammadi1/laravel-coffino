<?php

namespace Tests\Feature\Models;

use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class UserTest extends TestCase
{
    use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insert_data()
    {
        $user_data= User::factory()->make()->toArray();
        $user_data['password'] = bcrypt('12345678');

        User::create($user_data);

//        $this->assertDatabaseCount('users', 1);
        $this->assertDatabaseHas('users', $user_data);
    }

}
