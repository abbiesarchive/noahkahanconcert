<?php

namespace Database\Factories;

use App\Models\Registration;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Registration>
 */
class RegistrationFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'ticket_quantity' => fake()->numberBetween(1, 4),
            'ticket_type' => 'General admission',
            'concert_schedule' => fake()->randomElement(Registration::SCHEDULES),
        ];
    }
}
