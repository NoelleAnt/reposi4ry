<?php

namespace Database\Seeders;


use Illuminate\Database\Seeder;
use App\Models\Tag;

class PostTagSeeder extends Seeder
{
    public function run()
    {
        Tag::factory()->count(10)->create(); // Creates 10 Post Tag records
    }
}