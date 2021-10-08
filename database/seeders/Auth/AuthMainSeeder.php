<?php

namespace Database\Seeders\Auth;

use Database\Seeders\Auth\Permissions\PermissionsSeeder;
use Database\Seeders\Auth\Roles\RolesSeeder;
use Illuminate\Database\Seeder;

class AuthMainSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $this->call(RolesSeeder::class);
        $this->call(PermissionsSeeder::class);
    }
}
