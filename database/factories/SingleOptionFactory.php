<?php

namespace Database\Factories;

use App\Models\SingleOption;
use Illuminate\Database\Eloquent\Factories\Factory;

class SingleOptionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = SingleOption::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => '',
            'title' => '',
            'value' => '',
        ];
    }
}
