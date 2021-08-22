<?php

namespace Tests\Feature\Models;


use App\Models\User;
use Illuminate\Database\Eloquent\Model;

trait ModelHelperTesting
{


    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_insert_data()
    {
        $model = $this->model();
        $data = $model::factory()->make()->toArray();

        if ($model instanceof User)
            $data['password'] = 15165444;

        $model::create($data);

        $this->assertDatabaseHas($model->getTable(), $data);
    }

    abstract protected function model() : Model;
}
