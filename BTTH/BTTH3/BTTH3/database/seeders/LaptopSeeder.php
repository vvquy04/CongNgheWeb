<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory as faker;
use App\Models\Laptop;

class LaptopSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Laptop::create([
                'brand' => $faker->randomElement(['Dell', 'HP', 'Lenovo', 'Apple', 'Asus']),
                'model' => $faker->word . '-' . $faker->numberBetween(1000, 9999),
                'specifications' => $faker->sentence(10), // Ví dụ: "16GB RAM, 512GB SSD, Intel i7"
                'rental_status' => $faker->boolean, // Trạng thái thuê (true/false)
                'renter_id' => $faker->numberBetween(1, 10), // ID giả định của renter (phụ thuộc bảng renters)
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
