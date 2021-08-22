<?php

namespace Tests\Feature\Models;

use App\Models\Ticket;
use App\Models\TicketMessage;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TicketTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations, ModelHelperTesting;

    public function test_ticket_relationship_with_ticket_message()
    {
        $count = rand(1, 10);

        $ticket = Ticket::factory()
            ->has(TicketMessage::factory()->count($count), 'messages')
            ->create();

        $this->assertCount($count, $ticket->messages);
        $this->assertTrue($ticket->messages->first() instanceof TicketMessage);
    }

    public function test_user_relationship_with_asked_ticket()
    {
        $ticket = Ticket::factory()
            ->for(
                User::factory()
                , 'asked_user')
            ->create();

        $this->assertTrue(isset($ticket->asked_user->id));
        $this->assertTrue($ticket->asked_user instanceof User);
    }

    public function test_user_relationship_with_responded_ticket()
    {
        $ticket = Ticket::factory()
            ->for(
                User::factory()
                , 'responded_user')
            ->create();

        $this->assertTrue(isset($ticket->responded_user->id));
        $this->assertTrue($ticket->responded_user instanceof User);
    }


    protected function model(): Model
    {
        return new Ticket();
    }
}
