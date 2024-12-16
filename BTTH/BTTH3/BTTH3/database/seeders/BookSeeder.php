<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;
use Faker\Factory as faker;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Faker::create();
        for($i=0; $i<50; $i++){
            Book::create([
                'title' => $faker->sentence(2),
                'author' => $faker->name,
                'publication_year' => $faker->year,
                'genre' => $faker->randomElement(['Programming', 'Fiction', 'Science', 'History']),
                'library_id' => $faker->numberBetween(1,10),
                'updated_at' => now(),
                'created_at' => now()
            ]);
        }
    }
}
