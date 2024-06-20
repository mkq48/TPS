<?php

namespace Database\Seeders;

use App\Models\Employee;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Factory;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $faker = Factory::create();
        for ($i=0; $i < 50; $i++) { 
            Employee::create([
                'Employ_Name' => $faker->lastName,
                'Employ_Email' => $faker->email,
                'Employ_Phone' => $faker->phoneNumber,
                'Gender'=> $faker->randomElement(['Nam', 'Nữ']),
                'DOB' => $faker->date,
                'Address' => $faker->city,
                'Name_TK' => $faker->userName,
                'Password' => $faker->password,
            ]);
        }
    }
}
