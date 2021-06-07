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
       

        // ** Permisiion

        // general permissions

        // for Category Model
        $create_cat = Permission::create(['name' => 'create category']);
        $edit_cat = Permission::create(['name' => 'edit category']);
        $delete_cat = Permission::create(['name' => 'delete category']);
        $see_cat = Permission::create(['name' => 'see category']);
        $manage_cat = Permission::create(['name' => 'manage category']);


        // for Service Model
        $create_service = Permission::create(['name' => 'create service']);
        $edit_service = Permission::create(['name' => 'edit service']);
        $delete_service = Permission::create(['name' => 'delete service']);
        $see_service = Permission::create(['name' => 'see service']);
        $manage_service = Permission::create(['name' => 'manage service']);

        // for Count Model
        $create_count = Permission::create(['name' => 'create count']);
        $edit_count = Permission::create(['name' => 'edit count']);
        $delete_count = Permission::create(['name' => 'delete count']);
        $see_count = Permission::create(['name' => 'see count']);
        $manage_count = Permission::create(['name' => 'manage count']);

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
