<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;
use Faker\Factory as Faker;

class CustomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        for($i=1; $i<=10; $i++){
            $faker = Faker::create();
            $obj = new Customer;
            $obj->name = $faker->name;
            $obj->email = $faker->email;
            $obj->phone = $faker->phoneNumber;
            $obj->address = $faker->address;
            $obj->city = $faker->city;
            $obj->state = $faker->state;
            $obj->country = $faker->country;
            $obj->dob = $faker->date;
            $obj->save();
        }




        // $obj = new Customer;
        // $obj->name = "Dilshan Maduranga";
        // $obj->email = "dilshan@maxmind.lk";
        // $obj->phone = "0775";
        // $obj->address = "No 100 Colombo";
        // $obj->city = "Colombo";
        // $obj->state = "WP";
        // $obj->country = "Sri Lanka";
        // $obj->dob = "1988-01-10";
        // $obj->save();

    }
}
