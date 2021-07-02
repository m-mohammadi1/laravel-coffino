<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        // $this->call(ServicesTableSeeder::class);
        $this->call(RoleAndPermissionSeeder::class);
        $this->call(UserTableSeeder::class);
        $this->call(CountsTableSeeder::class);
        $this->call(FaqsTableSeeder::class);
        $this->call(CommentsTableSeeder::class);
        $this->call(SingleOptionsTableSeeder::class);
    }
}
