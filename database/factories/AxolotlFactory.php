<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class AxolotlFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => $this->faker->firstName,
            'age' => $this->faker->numberBetween(1, 10),
            'colour' => $this->faker->safeColorName,
        ];
    }
}
