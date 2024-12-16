<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Cinema;
use Faker\Factory as faker;

class CinemaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Cinema::create([
                'name' => $faker->name,
                'location' => $faker->address,
                'total_seats' => $faker->numerify,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
