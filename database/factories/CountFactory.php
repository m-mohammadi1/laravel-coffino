<?php

namespace Database\Factories;

use App\Models\Count;
use Illuminate\Database\Eloquent\Factories\Factory;

class CountFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Count::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'gift_count' => $this->faker->numberBetween(10, 50),
            'service_count' => $this->faker->numberBetween(10, 200),
        ];
    }
}
