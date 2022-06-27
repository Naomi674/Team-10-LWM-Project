<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\PendingKnowledge>
 */
class PendingKnowledgeFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->realText(42),
            'author' => $this->faker->name(),
            'category' => $this->faker->randomElement(['FAQ', 'Onboarding', 'IT Knowledge', 'HR', 'ServiceNow Portal', 'Facilities', 'Financial Services']),
            'created_at' => now(),
            'updated_at' => now(),
        ];
    }
}
