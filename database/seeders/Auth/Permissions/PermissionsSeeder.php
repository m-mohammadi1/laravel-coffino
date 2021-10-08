<?php

namespace Database\Seeders\Auth\Permissions;
use Illuminate\Database\Seeder;

class PermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(CategoryPermissionsSeeder::class);
        $this->call(CommentPermissionsSeeder::class);
        $this->call(CountPermissionsSeeder::class);
        $this->call(FaqPermissionsSeeder::class);
        $this->call(PurchasedServicePermissionsSeeder::class);
        $this->call(ServicePermissionsSeeder::class);
        $this->call(SingleOptionPermissionsSeeder::class);
        $this->call(TicketPermissionsSeeder::class);
        $this->call(TransactionPermissionsSeeder::class);
    }
}
