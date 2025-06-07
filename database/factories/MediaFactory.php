<?php

namespace Database\Factories;

use App\Models\Media;
use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    protected $model = Media::class;

    public function definition(): array
    {
        return [
            'post_id' => Post::factory(),
            'media_url' => $this->faker->imageUrl(640, 480, 'nature', true),
            'media_type' => $this->faker->randomElement(['image', 'video']),
        ];
    }
}
