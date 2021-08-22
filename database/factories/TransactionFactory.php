<?php

namespace Database\Factories;

use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TransactionFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Transaction::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'payment_id' => $this->faker->text(32),
            'user_id' => User::factory(),
            'service_id' => Service::factory(),
            'service_count' => $this->faker->numberBetween(1, 1000),
            'service_link' => $this->faker->url,
            'paid' => $this->faker->numberBetween(1000, 100000),
        ];
    }
}
