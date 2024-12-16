<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Class1;
use Faker\Factory as faker;

class Class1Seeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Class1::create([
                'grade_level' => $faker->randomElement(['Pre-K', 'Kindergarten']),
                'room_number' => strtoupper($faker->bothify('??##')), 
            ]);
        }
    }
}
