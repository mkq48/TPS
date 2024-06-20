<?php

namespace Database\Seeders;

use App\Models\SC;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class SCSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i=0; $i < 50; $i++) { 
            SC::create([
                'Cinema_Name' => $faker->lastName,
                'Film_Name' => $faker->streetName,
                'SC' => $faker->time,
                'DOS' => $faker->date,
                'Price' => $faker->randomElement(['50000', '70000', '100000', '150000']),
            ]);
        }
    }
}
