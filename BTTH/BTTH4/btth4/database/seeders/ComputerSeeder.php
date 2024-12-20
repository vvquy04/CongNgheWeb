<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Computer;
use Faker\Factory as faker;

class ComputerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Computer::create([
                'computer_name' => $faker->regexify('Lab[1-5]-PC[0-9]{2}'), 
                'model' => $faker->randomElement(['Dell Optiplex 7090', 'HP ProDesk 400', 'Lenovo ThinkCentre M720']),
                'operating_system' => $faker->randomElement(['Windows 10 Pro', 'Ubuntu 20.04', 'Windows 11']),
                'processor' => $faker->randomElement(['Intel Core i5-11400', 'Intel Core i7-9700', 'AMD Ryzen 5 5600G']),
                'memory' => $faker->randomElement([4, 8, 16, 32]), 
                'available' => $faker->boolean(80), 
            ]);
        }
    }
}
