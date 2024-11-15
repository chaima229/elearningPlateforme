<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Course;
use Faker\Factory as Faker;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Course::create([
                'title' => $faker->sentence,
                'description' => $faker->paragraph,
                'teacher_id' => rand(1, 10), // Associer à un utilisateur existant (enseignant)
                'price' => $faker->randomFloat(2, 10, 100), // Prix aléatoire entre 10 et 100
                'status' => ['draft', 'published', 'archived'][rand(0, 2)], // Statut aléatoire
            ]);
        }
    }
}
