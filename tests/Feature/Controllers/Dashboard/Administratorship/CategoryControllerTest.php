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
use Tests\Feature\Controllers\DatabaseHandler;
use Tests\TestCase;

class CategoryControllerTest extends TestCase
{
    use RefreshDatabase, DatabaseMigrations;

    use DatabaseHandler;

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

    public function test_store_method_when_user_is_admin()
    {
        $this->actingAs($this->admin);
        $data = Category::factory()->create()->toArray();

        $this
            ->post(
                route('dashboard.categories.store'),
                $data
            )
            ->assertRedirect()
            ->assertSessionHas('successMessage');
    }

    public function test_store_method_when_user_is_customer()
    {
        $this->actingAs($this->customer);
        $data = Category::factory()->create()->toArray();

        $response = $this
            ->post(
                route('dashboard.categories.store'),
                $data
            );

        $response
            ->assertStatus(403);
    }

    public function test_store_method_validation_rules()
    {
        $category = Category::factory()->create();

        $this->actingAs($this->admin);

        $this
            ->post(route('dashboard.categories.store', $category->id), [])
            ->assertRedirect()
            ->assertSessionHasErrors([
                'title', 'description'
            ]);
    }

    public function test_update_method_when_user_is_admin()
    {
        $category = Category::factory()->create();
        $data = Category::factory()->make()->toArray();

        $this->actingAs($this->admin);

        $response = $this
            ->put(
                route('dashboard.categories.update', $category->id),
                $data
            );

        $response
            ->assertRedirect()
            ->assertSessionHas('successMessage');
    }

    public function test_update_method_when_user_is_customer()
    {
        $category = Category::factory()->create();
        $data = Category::factory()->make()->toArray();

        $this->actingAs($this->customer);

        $response = $this
            ->put(
                route('dashboard.categories.update', $category->id),
                $data
            );

        $response
            ->assertStatus(403);
    }

    public function test_update_method_validation_rules()
    {
        $category = Category::factory()->create();

        $this->actingAs($this->admin);

        $this
            ->put(route('dashboard.categories.update', $category->id), [])
            ->assertRedirect()
            ->assertSessionHasErrors([
                'title', 'description'
            ]);
    }

}
