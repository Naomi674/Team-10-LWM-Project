<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\System>
 */
class SystemsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->randomElement(['Buisness Services', 'Digital Workplace', 'E-Commerce', 'Files & Folders']),
            'day1' => $this->faker->boolean,
            'day2' => $this->faker->boolean,
            'day3' => $this->faker->boolean,
            'day4' => $this->faker->boolean,
            'day5' => $this->faker->boolean,
            'status' => $this->faker->boolean,
        ];
    }
}
