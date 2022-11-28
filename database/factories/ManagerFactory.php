<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ManagerFactory extends Factory
{
    public function definition()
    {
        return [
            'name' =>  fake()->name,
            'email' => fake()->unique()->safeEmail,
            'level' => fake()->numberBetween(1,2),
        ];
    }
}
