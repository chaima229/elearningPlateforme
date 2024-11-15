<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;
use Faker\Factory as Faker;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Lesson::create([
                'course_id' => rand(1, 10), // Associer à un cours existant
                'title' => $faker->sentence,
                'content' => $faker->paragraph,
                'duration' => rand(30, 120), // Durée en minutes
                'order_num' => $index, // Numéro d'ordre pour l'affichage
            ]);
        }
    }
}
