<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use App\Models\Order;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'admin@edu.com',
            'password' => 'course2025',
            'role' => 'admin',
        ]);

        User::factory(10)->create();
        Course::factory(10)->create();
        Lesson::factory(10)->create();
        Order::factory(10)->create();
    }
}
