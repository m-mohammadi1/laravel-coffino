<?php

namespace Database\Seeders\General;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $super_admin = User::firstOrCreate(
            ['email' => 'admin@admin.com'],
            [
                'name' => 'محمد',
                'password' => bcrypt('12345678'),
                'email_verified_at' => now(),
            ]
        );

        $super_admin->assignRole('super-admin');

        $admin = User::firstOrCreate(
            ['email' => 'mm@admin.com'],
            [
                'name' => 'محمد',
                'password' => bcrypt('12345678'),
                'email_verified_at' => now(),
            ]
        );
        $admin->assignRole('admin');

        $user = User::firstOrCreate(
            ['email' => 'ali@admin.com'],
            [
                'name' => 'علی',
                'password' => bcrypt('12345678'),
                'email_verified_at' => now(),
            ]
        );
        $user->assignRole('customer');

    }
}
