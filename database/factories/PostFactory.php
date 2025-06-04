<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PostFactory extends Factory
{
    public function definition(): array
    {
        return [
            'title' => fake()->sentence(),
            'content' => fake()->paragraph(),
            'slug' => fake()->slug(),
            'publication_date' => now(),
            'last_modified_date' => now(),
            'status' => 'P - Published',
            'featured_image_url' => fake()->imageUrl(),
            'views_count' => fake()->numberBetween(0, 1000),
            'user_id' => \App\Models\User::factory(), // Relates to a User
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}