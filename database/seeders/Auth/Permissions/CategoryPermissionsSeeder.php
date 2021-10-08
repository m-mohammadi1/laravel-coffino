<?php

namespace Database\Seeders\Auth\Permissions;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class CategoryPermissionsSeeder extends Seeder
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
        $create = Permission::findOrCreate('create category');
        $edit = Permission::findOrCreate('edit category');
        $delete = Permission::findOrCreate('delete category');
        $see = Permission::findOrCreate('see category');
        $manage = Permission::findOrCreate('manage category');

        $super_admin->givePermissionTo([
            $create, $edit, $see, $manage, $delete
        ]);
        $admin->givePermissionTo([
            $create, $edit, $see, $manage,
        ]);
    }
}
