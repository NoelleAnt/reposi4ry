<?php

namespace Database\Factories;
use App\Models\Role;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */

 class RoleFactory extends Factory
 {
     protected $model = Role::class;
 
     public function definition()
     {
         return [
             'name' => $this->faker->word,
         ];
     }
 }