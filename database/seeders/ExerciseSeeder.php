<?php

namespace Database\Seeders;

use App\Models\Exercise;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ExerciseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $exercises = [
            'Squat',
            'Push-up',
            'Dip',
            'Plank',
            'Mountain climber',
            'Burpee',
            'Lunge',
            'Wall sit',
            'Crunch',
        ];

        foreach ($exercises as $exerciseName) {
            Exercise::firstOrCreate(['name' => $exerciseName]);
        }
    }
}
