<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'status' => fake()->randomElement(['created', 'payment', 'error']),
        'user_id' => fake()->numberBetween(1,10),
        'course_id' => fake()->numberBetween(1,10),
        'certificate_number' =>fake()->numberBetween(10000, 99999),
        ];
    }
}
