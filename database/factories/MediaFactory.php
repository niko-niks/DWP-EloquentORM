<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    public function definition(): array
    {
        return [
            'file_name' => fake()->word() . '.jpg',
            'file_type' => 'image/jpeg',
            'file_size' => fake()->numberBetween(1000, 5000000),
            'url' => fake()->imageUrl(),
            'upload_date' => now(),
            'description' => fake()->sentence(),
            'post_id' => \App\Models\Post::factory(), // Relates to a Post
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}