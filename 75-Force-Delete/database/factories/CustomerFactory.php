<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Customer>
 */
class CustomerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     //https://github.com/fzaninotto/Faker 
     //To to this page to get the values
    public function definition(): array
    {
        return [
            'name'=> fake()->name('male'),
            'photo'=> fake()->image('public/uploads', 400,300),
            'email'=> fake()->email(),
            'phone'=> fake()->phoneNumber(),
            'address'=> fake()->address(),
            'city'=> fake()->city(),
            'state'=> fake()->state(),
            'country'=> fake()->country(),
            'dob'=> fake()->date(),
            'status'=> fake()->numberBetween(0,1) //This will add 0 or 1.
        ];
    }
}
