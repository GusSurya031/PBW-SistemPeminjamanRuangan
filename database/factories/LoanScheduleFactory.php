<?php

namespace Database\Factories;

use App\Models\Admin;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\LoanSchedule>
 */
class LoanScheduleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "room_id" => function () {
                return Room::inRandomOrder()->first()->id;
            },
            "admin_id" => function () {
                return Admin::inRandomOrder()->first()->id;
            },
            "user_nim" => function () {
                return User::inRandomOrder()->first()->nim;
            },
            "loan_date" => fake()->date(),
            "end_loan_date" => fake()->date(),
            "start_time" => fake()->dateTime(),
            "end_time" => fake()->time(),
            "purpose" => fake()->title(),
            "status" => fake()->randomElement(['Available', 'In Progress', 'Busy', 'Done']),
        ];
    }
}
