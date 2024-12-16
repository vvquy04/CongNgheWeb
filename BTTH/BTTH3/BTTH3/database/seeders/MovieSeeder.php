<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Movie;
use Faker\Factory as faker;

class MovieSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Movie::create([
                'title' => $faker->title,
                'director' => $faker->name,
                'release_date' => $faker->date,
                'duration' => $faker->numerify,
                'cinema_id' => $faker->numberBetween(1, 49),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
