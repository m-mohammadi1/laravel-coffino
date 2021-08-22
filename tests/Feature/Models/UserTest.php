<?php

namespace Tests\Feature\Models;

use App\Models\Comment;
use App\Models\Notification;
use App\Models\Ticket;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use function React\Promise\race;

class UserTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;
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

        $this->assertDatabaseHas('users', $user_data);
    }


    public function test_user_relationship_with_comment()
    {
        $count = rand(1, 10);
        $user = User::factory()
            ->hasComments($count)
            ->create();

        $this->assertCount($count, $user->comments);
        $this->assertTrue($user->comments->first() instanceof Comment);
    }

    public function test_user_relationship_with_notification()
    {
        $count = rand(1, 10);
        $user = User::factory()
            ->has(Notification::factory()->count($count))
            ->create();

        $this->assertCount($count, $user->notifications);
        $this->assertTrue($user->notifications->first() instanceof Notification);

    }

    public function test_user_relationship_with_transaction()
    {
        $count = rand(1, 10);
        $user = User::factory()
            ->has(Transaction::factory()->count($count))
            ->create();

        $this->assertCount($count, $user->transactions);
        $this->assertTrue($user->transactions->first() instanceof Transaction);
    }

    public function test_user_relationship_with_asked_ticket()
    {
        $count = rand(1, 10);
        $user = User::factory()
            ->has(Ticket::factory()
                ->count($count)
                ->state(function (array $attributes, User $user) {
                    return [
                        'asked_user_id' => $user->id
                    ];
                })
            , 'asked_tickets')
            ->create();

        $this->assertCount($count, $user->asked_tickets);
        $this->assertTrue($user->asked_tickets->first() instanceof Ticket);
    }

    public function test_user_relationship_with_responding_ticket()
    {
        $count = rand(1, 10);
        $user = User::factory()
            ->has(Ticket::factory()
                ->count($count)
                ->state(function (array $attributes, User $user) {
                    return [
                        'responded_user_id' => $user->id
                    ];
                })
                , 'responding_tickets')
            ->create();

        $this->assertCount($count, $user->responding_tickets);
        $this->assertTrue($user->responding_tickets->first() instanceof Ticket);

    }

}
