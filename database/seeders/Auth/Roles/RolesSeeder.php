<?php

namespace Database\Seeders\Auth\Roles;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class RolesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // roles of site
        $super_admin = Role::findOrCreate('super-admin');
        $admin = Role::findOrCreate('admin');
        $customer = Role::findOrCreate('customer');

    }
}
