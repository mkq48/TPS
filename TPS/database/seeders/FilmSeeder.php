<?php

namespace Database\Seeders;

use App\Models\Film;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class FilmSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i=0; $i < 50; $i++) { 
            Film::create([
                'Film_Name' => $faker-> streetName,
                'Description' => $faker-> text,
                'Age' => $faker-> randomElement(['13', '16', '18']),
                'Image_url' => $faker-> imageUrl,
                'Trailler_url' => $faker-> imageUrl,
                'Film_time' => $faker-> numberBetween(80, 150),
                'Language' => $faker-> randomElement(['Việt Nam', 'Tiếng Anh', 'Tiếng Trung']),
                'DOS' => $faker-> date,
                'DOE' => $faker-> date,
                'Category' => $faker-> randomElement(['Hành động', 'Tình cảm', 'Hoạt hình', 'Hài hước', 'Kinh dị']),
                'Actor' => $faker-> name,
                'Director' => $faker-> name,
            ]);
        }
    }
}
