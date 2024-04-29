<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Student;
use Faker\Factory as Faker;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for($i=1;$i<=100;$i++){
            $faker = Faker::create();
            $obj = new Student;
            $obj->name = $faker->name;
            $obj->email = $faker->email;
            $obj->save();
        }
    }
}
