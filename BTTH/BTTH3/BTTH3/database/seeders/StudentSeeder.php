<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Student::create([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'date_of_birth' => $faker->dateTimeBetween('-10 years', '-4 years')->format('Y-m-d'), 
                'parent_phone' => $faker->numerify('0#########'), 
                'class_id' => $faker->numberBetween(1, 10),
            ]);
        }
    }
}
