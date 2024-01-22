<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Customer;

class CustomeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $obj = new Customer;
        $obj->name = "Dilshan Maduranga";
        $obj->email = "dilshan@maxmind.lk";
        $obj->phone = "0775";
        $obj->address = "No 100 Colombo";
        $obj->city = "Colombo";
        $obj->state = "WP";
        $obj->country = "Sri Lanka";
        $obj->dob = "1988-01-10";
        $obj->save();

        $obj1 = new Customer;
        $obj1->name = "Ama Dinushi";
        $obj1->email = "ama@maxmind.lk";
        $obj1->phone = "0775";
        $obj1->address = "No 100 Colombo";
        $obj1->city = "Colombo";
        $obj1->state = "WP";
        $obj1->country = "Sri Lanka";
        $obj1->dob = "1992-01-10";
        $obj1->save();
    }
}
