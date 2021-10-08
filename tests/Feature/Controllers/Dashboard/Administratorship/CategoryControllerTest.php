<?php

namespace Tests\Feature\Controllers\Dashboard\Administratorship;

use App\Models\Category;
use App\Models\User;
use Database\Seeders\DatabaseSeeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Support\Facades\Artisan;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    use DatabaseMigrations, RefreshDatabase;

    /**
     * @var User
     */
    private $super_admin;
    /**
     * @var User
     */
    private $customer;
    /**
     * @var User
     */
    private $admin;

    protected function setUp(): void
    {
        parent::setUp();
        Artisan::call('migrate');
        Artisan::call('db:seed');

        $super_admin = User::factory()->create();
        $super_admin->assignRole('super-admin');

        $this->super_admin = $super_admin;

        $admin = User::factory()->create();
        $admin->assignRole('admin');

        $this->admin = $admin;

        $customer = User::factory()->create();
        $customer->assignRole('customer');

        $this->customer = $customer;


    }

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_index_method_when_user_is_admin_or_super_admin()
    {
        $this->actingAs($this->admin);

        $response = $this->get(route('dashboard.categories.index'));

        $response->assertStatus(200);
        $response->assertViewIs('dashboard.categories.index');
        $response->assertViewHasAll([
           'filter_items', 'categories'
        ]);
    }

    public function test_index_method_when_user_is_customer()
    {
        $this->actingAs($this->customer);

        $response = $this->get(route('dashboard.categories.index'));

        $response->assertStatus(403);
    }

    public function test_create_method_when_user_is_admin_or_super_admin()
    {
        $this->actingAs($this->admin);
        $response = $this->get(route('dashboard.categories.create'));

        $response->assertStatus(200);
        $response->assertViewIs('dashboard.categories.create');
    }

    public function test_create_method_when_user_is_customer()
    {
        $this->actingAs($this->customer);

        $response = $this->get(route('dashboard.categories.create'));

        $response->assertStatus(403);
    }

    public function test_edit_method_when_user_is_admin_or_super_admin()
    {
        $this->actingAs($this->admin);

        $category = Category::factory()->create();

        $response = $this->get(route('dashboard.categories.edit', $category->id));

        $response->assertStatus(200);
        $response->assertViewIs('dashboard.categories.edit');
    }

    public function test_edit_method_when_user_is_customer()
    {
        $this->actingAs($this->customer);

        $category = Category::factory()->create();

        $response = $this->get(route('dashboard.categories.edit', $category->id));
        $response->assertStatus(403);
    }


}
