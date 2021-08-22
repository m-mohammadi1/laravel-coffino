<?php

namespace Tests\Feature\Models;

use App\Models\PurchasedService;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class TransactionTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations, ModelHelperTesting;


    public function test_transaction_relationship_with_service()
    {
        $count = rand(1, 10);

        $transaction = Transaction::factory()
            ->for(Service::factory())
            ->create();

        $this->assertTrue(isset($transaction->service->id));
        $this->assertTrue($transaction->service instanceof Service);
    }

    public function test_transaction_relationship_with_user()
    {
        $transaction = Transaction::factory()
            ->for(User::factory())
            ->create();

        $this->assertTrue(isset($transaction->user->id));
        $this->assertTrue($transaction->user instanceof User);
    }

    public function test_transaction_relationship_with_purchased_service()
    {
        $transaction = Transaction::factory()
            ->has(PurchasedService::factory(), 'purchasedService')
            ->create();

        $this->assertTrue(isset($transaction->purchasedService));
        $this->assertTrue($transaction->purchasedService instanceof PurchasedService);
    }

    protected function model(): Model
    {
        return new Transaction();
    }
}
