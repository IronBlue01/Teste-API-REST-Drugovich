<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ClientFactory extends Factory
{
    public function definition()
    {
        return [
            'cnpj' => fake()->randomDigit().'1.527.669/0001-8'.fake()->randomDigit(),
            'name' => fake()->name()  
        ];
    }
}
