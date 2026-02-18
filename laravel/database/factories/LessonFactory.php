<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'title' => fake()->title(),
        'content' => fake()->paragraph(1),
        'supertube_url' => fake()->url(),
        'duration' => fake()->numberBetween(1, 4),
        'course_id' => fake()->numberBetween(1, 10),
        ];
    }
}
