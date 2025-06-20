<?php

namespace Database\Seeders;

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
        // Create sample users
        User::factory()->create([
            'name' => 'Huzaifa',
            'email' => 'huzaifa@example.com',
        ]);

        User::factory()->create([
            'name' => 'Abdu',
            'email' => 'abdu@example.com',
        ]);

        User::factory()->create([
            'name' => 'Mahmoud',
            'email' => 'mahmoud@example.com',
        ]);

        $this->call([
            ExerciseSeeder::class,
            PerformanceSeeder::class,
        ]);
    }
}
