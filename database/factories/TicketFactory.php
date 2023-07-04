<?php

namespace Database\Factories;

use App\Models\Ticket;
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
            'priority' => $this->faker->randomElement(Ticket::AVAILABLE_PRIORITIES),
            'status' => $this->faker->randomElement(Ticket::AVAILABLE_STATUSES),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
