<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hardware_device;
use Faker\Factory as faker;

class HardwareDeviceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Hardware_device::create([
                'device_name' => $faker->name,
                'type' => $faker->randomElement(['qq', 'ko', 'cc']),
                'status' => $faker->boolean,
                'center_id' => $faker->numberBetween(1,49),
                'created_at' => now(),
                'updated_at' => now()
            ]);
        }
    }
}
