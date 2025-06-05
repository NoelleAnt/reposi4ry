<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
    $status = fake()->randomElement(['D', 'P', 'I']);
    $title = fake()->title();
        return [
        'title' => $title,
        'slug' => str($title)->slug(),
        'content' => fake()->paragraph(),
        'status' => $status,
        'publication_date' => $status === 'P' ? now() : null,
        'featured_image_url' => fake()->imageUrl(640,480, 'animals', true),
        ];
    }
}
