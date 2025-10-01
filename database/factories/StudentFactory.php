<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            //
            'name' => fake()->name(),
            'birthday' => fake()->dateTimeBetween('-22 years', '-20 years')->format('Y-m-d'),
            'major' => fake()->randomElement([
                'Informatics Engineering',
                'Computer Science',
                'Mechanical Engineering',
                'Physics',
                'Medical',
                'Psychology',
                'Tax Accounting',
                'Business'
            ]),
            'score' => fake()->numberBetween(70,100)
        ];
    }
}
