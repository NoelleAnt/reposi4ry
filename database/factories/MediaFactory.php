<?php

namespace Database\Factories;

use App\Models\Media;
use Illuminate\Database\Eloquent\Factories\Factory;

class MediaFactory extends Factory
{
    protected $model = Media::class;

    public function definition()
    {
        return [
            'post_id' => \App\Models\Post::factory(), // Assuming you have a Post factory
            'file_path' => $this->faker->imageUrl(), // You can customize this as needed
        ];
    }
}