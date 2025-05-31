<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\PostCategory;

class PostCategorySeeder extends Seeder
{
    public function run()
    {
        PostCategory::factory()->count(5)->create(); // Creates 5 Post Category records
    }
}