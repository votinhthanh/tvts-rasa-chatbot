<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class MajorFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name'                 => $this->faker->name(),
            'code'                 => $this->faker->bothify('#######'),
            'reference_score'      => $this->faker->randomFloat(1, 0, 30),
            'entrance_score'       => $this->faker->randomFloat(1, 0, 30),
            'subjects_combination' => $this->faker->randomElements(['A00', 'A01']),
            'total_credit'         => 100,
        ];
    }
}
