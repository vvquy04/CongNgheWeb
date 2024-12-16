<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Medicine;
use Faker\Factory as faker;
class MedicineSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Medicine::create([
                'name' => $faker->word(),
                'brand' => $faker->company(),
                'dosage' => $faker->randomElement(['10mg', '20mg', '500mg']),
                'form' => $faker->randomElement(['viên nén', 'viên nang', 'xi-rô']),
                'price' => $faker->randomFloat(2, 5, 100), // Giá từ 5 đến 100
                'stock' => $faker->numberBetween(0, 500),
            ]);
        }
    }
}
