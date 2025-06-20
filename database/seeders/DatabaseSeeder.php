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

        // add admin user
        User::factory()->create([
            'name' => 'Admin',
            'email' => 'Admin@example.com',
            'password' => bcrypt('password'),
        ]);

        // Create sample users
        User::factory()->create([
            'name' => 'Huzaifa',
            'email' => 'huzaifa@example.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Abdu',
            'email' => 'abdu@example.com',
            'password' => bcrypt('password'),
        ]);

        User::factory()->create([
            'name' => 'Mahmoud',
            'email' => 'mahmoud@example.com',
            'password' => bcrypt('password'),
        ]);

        $this->call([
            ExerciseSeeder::class,
            PerformanceSeeder::class,
        ]);
    }
}
