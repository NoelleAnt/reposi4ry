<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create a test user
        \App\Models\User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);

        $this->call([
            CategorySeeder::class,
            CommentSeeder::class,
            MediaSeeder::class,
            PostSeeder::class,
            RoleSeeder::class,
            TagSeeder::class,
            UserSeeder::class,
        ]);
    }
}