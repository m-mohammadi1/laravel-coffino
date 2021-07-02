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

        // for PurchasedService Model
        $create_purchased_service = Permission::create(['name' => 'create purchased_service']);
        $edit_purchased_service = Permission::create(['name' => 'edit purchased_service']);
        $delete_purchased_service = Permission::create(['name' => 'delete purchased_service']);
        $see_purchased_service = Permission::create(['name' => 'see purchased_service']);
        $manage_purchased_service = Permission::create(['name' => 'manage purchased_service']);

        // for faqs model
        $create_faq = Permission::create(['name' => 'create faq']);
        $edit_faq = Permission::create(['name' => 'edit faq']);
        $delete_faq = Permission::create(['name' => 'delete faq']);
        $see_faq = Permission::create(['name' => 'see faq']);
        $manage_faq = Permission::create(['name' => 'manage faq']);

        // comments
        $create_comment = Permission::create(['name' => 'create comment']);
        $edit_comment = Permission::create(['name' => 'edit comment']);
        $delete_comment = Permission::create(['name' => 'delete comment']);
        $see_comment = Permission::create(['name' => 'see comment']);
        $manage_comment = Permission::create(['name' => 'manage comment']);

        // signle optiopns
        $create_single_options = Permission::create(['name' => 'create single_options']);
        $edit_single_options = Permission::create(['name' => 'edit single_options']);
        $delete_single_options = Permission::create(['name' => 'delete single_options']);
        $see_single_options = Permission::create(['name' => 'see single_options']);
        $manage_single_options = Permission::create(['name' => 'manage single_options']);



        // assign permissions to roles
        $all_permissions = Permission::all();
        $super_admin->givePermissionTo($all_permissions);

        $admin->givePermissionTo([
            $create_cat, $edit_cat, $see_cat, $manage_cat,
            $create_service, $edit_service, $see_service, $manage_service,
            $create_count, $edit_count, $see_count, $manage_count,
            $create_transaction, $edit_transaction, $see_transaction, $manage_transaction,
            $create_purchased_service, $edit_purchased_service, $see_purchased_service, $manage_purchased_service,
            $create_faq,  $edit_faq, $see_faq, $manage_faq,
            $create_comment,  $edit_comment, $see_comment, $manage_comment,
            $edit_single_options,  $manage_single_options
        ]);
    }
}
