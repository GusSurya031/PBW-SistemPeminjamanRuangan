<?php

namespace Database\Seeders;

use App\Models\Admin;
use App\Models\Building;
use App\Models\Facility;
use App\Models\LoanSchedule;
use App\Models\Room;
use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::factory(1)->create();
        Admin::factory(1)->create();
        // Building::factory(2)->create();
        // Facility::factory(2)->create();
        // Room::factory(2)->create();
        LoanSchedule::factory(10)->create();
    }
}
