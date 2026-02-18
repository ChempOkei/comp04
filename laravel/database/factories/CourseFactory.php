<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'course_name' => fake()->title(),
        'description' => fake()->paragraph(1),
        'duration'=> fake()->numberBetween(1,10),
        'price' => fake()->numberBetween(100, 10000),
        'start_date' => fake()->date('Y-m-d', now()->addDays(2)),
        'end_date' => fake()->date('Y-m-d', now()->addDays(2)),
        'image_url'=>fake()->imageUrl(),
        ];
    }
}
