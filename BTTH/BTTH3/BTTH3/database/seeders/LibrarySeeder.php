<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Library;
use Faker\Factory as faker;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<10; $i++){
            Library::create([
                'name' =>  $faker->company,
                'address' => $faker->address,
                'contact_number' => $faker->numerify('0#########'),
                'updated_at' => now(),
                'created_at' => now()
            ]);
        }
    }
}
