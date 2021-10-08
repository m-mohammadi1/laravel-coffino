<?php

namespace Database\Seeders\Auth\Permissions;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CountPermissionsSeeder extends Seeder
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
        $create = Permission::findOrCreate('create count');
        $edit = Permission::findOrCreate('edit count');
        $delete = Permission::findOrCreate('delete count');
        $see = Permission::findOrCreate('see count');
        $manage = Permission::findOrCreate('manage count');

        $super_admin->givePermissionTo([
            $create, $edit, $see, $manage, $delete
        ]);
        $admin->givePermissionTo([
            $create, $edit, $see, $manage,
        ]);
    }
}
