<?php

namespace Tests\Feature\Controllers;

use App\Models\User;
use Illuminate\Support\Facades\Artisan;

trait DatabaseHandler
{
    /**
     * @var User
     */
    private $super_admin;
    /**
     * @var User
     */
    private $customer;
    /**
     * @var User
     */
    private $admin;

    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');

        $super_admin = User::factory()->create();
        $super_admin->assignRole('super-admin');

        $this->super_admin = $super_admin;

        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $this->admin = $admin;

        $customer = User::factory()->create();
        $customer->assignRole('customer');

        $this->customer = $customer;
    }
}
