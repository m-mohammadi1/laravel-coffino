<?php

namespace Database\Seeders\Auth\Permissions;

use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class NotificationPermissionsSeeder
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

        $create_notification = Permission::findOrCreate('create notification');

        $super_admin->givePermissionTo($create_notification);
        $admin->givePermissionTo($create_notification);
    }
}
