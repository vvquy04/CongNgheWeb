<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\It_center;


class ItCenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            It_center::create([
                'name' => $faker->name,
                'location' => $faker->address,
                'contact_email' => $faker->email,
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
