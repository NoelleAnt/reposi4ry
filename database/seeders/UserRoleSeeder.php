<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\UserRole;

class UserRoleSeeder extends Seeder
{
    public function run()
    {
        UserRole::factory()->count(3)->create(); // Creates 3 User Role records
    }
}