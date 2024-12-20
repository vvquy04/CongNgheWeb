<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Issue;
use Faker\Factory as faker;

class IssueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Issue::create([
                'computer_id' => $faker->numberBetween(1, 20), 
                'reported_by' => $faker->name(),
                'reported_date' => $faker->dateTimeBetween('-6 months', 'now'),
                'description' => $faker->sentence(10),
                'urgency' => $faker->randomElement(['Low', 'Medium', 'High']),
                'status' => $faker->randomElement(['Open', 'In Progress', 'Resolved']),
            ]);
        }
    }
}
