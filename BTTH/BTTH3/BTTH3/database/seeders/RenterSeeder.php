<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Renter;
use Faker\Factory as faker;

class RenterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create('vi');
        for($i=0; $i<50; $i++){
            Renter::create([
                'name' => $faker->sentence(3),
                'phone_number' => $faker->numerify('0#########'),
                'email' => $faker->email
            ]);
        }
    }
}
