<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;
use Spatie\Permission\Models\Role;

class NotificationPermissionSeeder extends Seeder
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

        $create_notification = Permission::create(['name' => 'create notification']);

        $super_admin->givePermissionTo($create_notification);
        $admin->givePermissionTo($create_notification);

    }
}
