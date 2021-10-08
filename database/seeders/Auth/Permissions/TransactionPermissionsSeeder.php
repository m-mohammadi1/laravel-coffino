<?php

namespace Database\Seeders\Auth\Permissions;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class TransactionPermissionsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = Role::findByName('super-admin');
        $admin = Role::findByName('admin');

        // for Category Model
        $create = Permission::findOrCreate('create service');
        $edit = Permission::findOrCreate('edit service');
        $delete = Permission::findOrCreate('delete service');
        $see = Permission::findOrCreate('see service');
        $manage = Permission::findOrCreate('manage service');

        $super_admin->givePermissionTo([
            $create, $edit, $see, $manage, $delete
        ]);
        $admin->givePermissionTo([
            $create, $edit, $see, $manage,
        ]);
    }
}
