<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ticket>
 */
class TicketFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title'=> $this->faker->title,
            'description' => $this->faker->text,
            'time' => $this->faker->numerify('##'),
            'location' => $this->faker->text,
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
