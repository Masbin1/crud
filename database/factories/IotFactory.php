<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Iot;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Iot>
 */
class IotFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'humidity' => fake()->randomFloat(0,20, 40),
            'temperature' => fake()->randomFloat(0, 20, 32),
            'nilai' => fake()->randomFloat(0, 0, 10),
        ];
    }
}
