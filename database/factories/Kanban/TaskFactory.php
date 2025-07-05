<?php

namespace Database\Factories\Kanban;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kanban\Task>
 */
class TaskFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->words(nb: 5, asText: true),
            'description' => fake()->words(nb: 30, asText: true),
            'created_at' => now(),
            'updated_at' => now()
        ];
    }
}
