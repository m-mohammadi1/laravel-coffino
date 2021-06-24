<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class RoleAndPermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // roles of site
        $super_admin = Role::create(['name' => 'super-admin']);
        $admin = Role::create(['name' => 'admin']);
        $customer = Role::create(['name' => 'customer']);




        // asign permissions to roles

        $super_admin->givePermissionTo([
            $create_cat, $edit_cat, $delete_cat, $see_cat, $manage_cat,
            $create_service, $edit_service, $delete_service, $see_service, $manage_service,
            $create_count, $edit_count, $delete_count, $see_count, $manage_count
        ]);

        $admin->givePermissionTo([
            $create_cat, $edit_cat, $see_cat, $manage_cat,
            $create_service, $edit_service, $see_service, $manage_service,
            $create_count, $edit_count, $see_count, $manage_count
        ]);
    }
}
