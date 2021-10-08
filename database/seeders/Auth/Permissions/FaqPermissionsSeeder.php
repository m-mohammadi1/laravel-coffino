<?php

namespace Database\Seeders\Auth\Permissions;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class FaqPermissionsSeeder extends Seeder
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
        $create = Permission::findOrCreate('create faq');
        $edit = Permission::findOrCreate('edit faq');
        $delete = Permission::findOrCreate('delete faq');
        $see = Permission::findOrCreate('see faq');
        $manage = Permission::findOrCreate('manage faq');

        $super_admin->givePermissionTo([
            $create, $edit, $see, $manage, $delete
        ]);
        $admin->givePermissionTo([
            $create, $edit, $see, $manage,
        ]);
    }
}
