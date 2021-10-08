<?php

namespace Database\Seeders\Auth\Permissions;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class SingleOptionPermissionsSeeder extends Seeder
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
        $create = Permission::findOrCreate('create single_option');
        $edit = Permission::findOrCreate('edit single_option');
        $delete = Permission::findOrCreate('delete single_option');
        $see = Permission::findOrCreate('see single_option');
        $manage = Permission::findOrCreate('manage single_option');

        $super_admin->givePermissionTo([
            $create, $edit, $see, $manage, $delete
        ]);
        $admin->givePermissionTo([
            $create, $edit, $see, $manage,
        ]);
    }
}
