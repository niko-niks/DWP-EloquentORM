<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    public function definition(): array
    {
        return [
            'comment_content' => fake()->paragraph(),
            'comment_date' => now(),
            'reviewer_name' => fake()->name(),
            'reviewer_email' => fake()->safeEmail(),
            'is_hidden' => fake()->boolean(20), // 20% chance of being hidden
            'user_id' => \App\Models\User::factory(), // Relates to a User
            'post_id' => \App\Models\Post::factory(), // Relates to a Post
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}