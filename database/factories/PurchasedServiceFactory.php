<?php

namespace Database\Factories;

use App\Models\PurchasedService;
use App\Models\Service;
use App\Models\Transaction;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PurchasedServiceFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = PurchasedService::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => User::factory(),
            'service_id' => Service::factory(),
            'service_count' => $this->faker->numberBetween(10, 1000),
            'service_link' => $this->faker->url,
            'status' => rand(0, 4),
            'transaction_id' => Transaction::factory()
        ];
    }
}
