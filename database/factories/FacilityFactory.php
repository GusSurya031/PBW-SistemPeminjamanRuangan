<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Facility>
 */
class FacilityFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "chair" => fake()->numberBetween(0, 10),
            "table" => fake()->numberBetween(0, 10),
            "ac" => fake()->numberBetween(0, 10),
            "lcd" => fake()->numberBetween(0, 10),
            "screen_lcd" => fake()->numberBetween(0, 10),
            "board" => fake()->numberBetween(0, 10),
            "lamp" => fake()->numberBetween(0, 10),
        ];
    }
}
