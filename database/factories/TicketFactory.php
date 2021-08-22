<?php

namespace Database\Factories;

use App\Models\Ticket;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class TicketFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Ticket::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(512),
            'body' => $this->faker->text(1024),
            'status' => rand(0, 1),
            'category' => rand(1, 4),
            'asked_user_id' => User::factory(),
            'responded_user_id' => User::factory(),
        ];
    }
}
