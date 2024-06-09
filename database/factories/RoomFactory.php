<?php

namespace Database\Factories;

use App\Models\Building;
use App\Models\Facility;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Room>
 */
class RoomFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "building_id" => function () {
                return Building::inRandomOrder()->first()->id;
            },
            "facility_id" => function () {
                return Facility::inRandomOrder()->first()->id;
            },
            "room_name" => fake()->name(),
            "number_of_floor" => fake()->numberBetween(0, 10),
            "length" => fake()->numberBetween(0, 10),
            "width" => fake()->numberBetween(0, 10),
            "capacity" => fake()->numberBetween(0, 100),
            "function" => fake()->title(),
            "description" => fake()->paragraph(),

        ];
    }
}
