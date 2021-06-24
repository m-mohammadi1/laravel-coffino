<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

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

        // for Transaction Model
        $create_transaction = Permission::create(['name' => 'create transaction']);
        $edit_transaction = Permission::create(['name' => 'edit transaction']);
        $delete_transaction = Permission::create(['name' => 'delete transaction']);
        $see_transaction = Permission::create(['name' => 'see transaction']);
        $manage_transaction = Permission::create(['name' => 'manage transaction']);








    }
}
