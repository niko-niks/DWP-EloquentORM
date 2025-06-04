<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class TagFactory extends Factory
{
    public function definition(): array
    {
        return [
            'tag_name' => fake()->word(),
            'slug' => fake()->slug(),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}