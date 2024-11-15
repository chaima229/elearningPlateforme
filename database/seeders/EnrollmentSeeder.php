<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Enrollment;
use Faker\Factory as Faker;

class EnrollmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $faker = Faker::create();

        foreach (range(1, 10) as $index) {
            Enrollment::create([
                'student_id' => rand(1, 10), // Associer à un utilisateur étudiant
                'course_id' => rand(1, 10), // Associer à un cours existant
                'progress' => rand(0, 100), // Progression aléatoire
                'last_accessed' => $faker->dateTimeThisYear(),
            ]);
        }
    }
}
