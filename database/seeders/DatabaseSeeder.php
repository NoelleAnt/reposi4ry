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

        // Call the other seeders
        $this->call([
            RoleSeeder::class,          // Add RoleSeeder
            UserRoleSeeder::class,     // Add UserRoleSeeder
            UserSeeder::class,         // Add UserSeeder
            PostCategorySeeder::class,  // Add PostCategorySeeder
            PostSeeder::class,          // Add PostSeeder
            MediaSeeder::class,         // Add MediaSeeder
            CommentSeeder::class,       // Add CommentSeeder
            PostTagSeeder::class,       // Add PostTagSeeder
        ]);
    }
}