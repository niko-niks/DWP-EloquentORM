<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class RoleFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->randomElement(['admin', 'editor', 'user']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}