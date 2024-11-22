<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\DB;

class Contact extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'first_name' => $this->faker->firstName(),
            'last_name' => $this->faker->lastName(),
            'gender' => $this->faker->gender(),
            'email' => $this->faker->email(),
            'tel-1' => $this->faker->rand(070, 90),
            'tel-2' => $this->faker->rand(1000, 9999),
            'tel-3' => $this->faker->rand(1000, 9999),
            'address' => $this->faker->address(),
            'building' => $this->faker->buildingNumber(),
            'content' => $this->faker->numberBetween(1, 5),
            'detail' => $this->faker->string(120),
        ];
    }
}
