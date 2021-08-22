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

class TicketMessageTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations, ModelHelperTesting;


    public function test_insert_data()
    {
        $model = $this->model();
        $ticket_message = $model::factory()->make();

        $data['message'] = $ticket_message->message;
        $data['for'] = $ticket_message->for;
        $data['ticket_id'] = $ticket_message->ticket_id;

        $model::create($data);

        $this->assertDatabaseHas($model->getTable(), $data);
    }



//    public function test_ticket_message_relationship_with_ticket()
//    {
//        $message = TicketMessage::factory()
//            ->for(
//                Ticket::factory()
//                , 'ticket')
//            ->create();
//
//        $this->assertTrue(isset($message->ticket->id));
//        $this->assertTrue($message->ticket instanceof Ticket);
//    }


    protected function model(): Model
    {
        return new TicketMessage();
    }
}
