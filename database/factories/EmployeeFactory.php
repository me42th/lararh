<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Employee>
 */
class EmployeeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $gender = ['M','F'][random_int(0,1)];
        return [
            "birth_date"=>$this->faker->dateTime()->format('Y-m-d'),
            "first_name"=>$this->faker->firstName($gender==='M'?'male':'female'),
            "last_name"=>$this->faker->lastName(),
            "gender"=>$gender,
            "hire_date"=>$this->faker->dateTime()->format('Y-m-d')
        ];
    }
}
