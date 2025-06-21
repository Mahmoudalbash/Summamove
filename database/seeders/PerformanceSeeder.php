<?php

namespace Database\Seeders;

use App\Models\Performance;
use App\Models\User;
use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PerformanceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Get users and exercises
        $users = User::all();
        $exercises = Exercise::all();

        // Create some simple performances
        Performance::create([
            'user_id' => 2, // Huzaifa
            'exercise_id' => 1,
            'duration' => 3, //minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 2, // Huzaifa
            'exercise_id' => 2,
            'duration' => 2, // 2 minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 2, // Huzaifa
            'exercise_id' => 3,
            'duration' => 5, // 5 minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 2, // Huzaifa
            'exercise_id' => 4,
            'duration' => 4, // 4 minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 3, // Abdu
            'exercise_id' => 1,
            'duration' => 5, // 5 minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 3, // Abdu
            'exercise_id' => 2,
            'duration' => 3, // 3 minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 3, // Abdu
            'exercise_id' => 3,
            'duration' => 4, // 4 minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 3, // Abdu
            'exercise_id' => 4,
            'duration' => 5, // 5 minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 4, // Mahmoud
            'exercise_id' => 1,
            'duration' => 5, // 5 minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 4, // Mahmoud
            'exercise_id' => 2,
            'duration' => 3, // 3 minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 4, // Mahmoud
            'exercise_id' => 3,
            'duration' => 4, // 4 minutes
            'speed' => null,
            'distance' => null,
        ]);

        Performance::create([
            'user_id' => 4, // Mahmoud
            'exercise_id' => 4,
            'duration' => 5, // 5 minutes
            'speed' => null,
            'distance' => null,
        ]);
    }
}
