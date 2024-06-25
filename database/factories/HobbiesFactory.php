<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Hobbies>
 */
class HobbiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hobby_name' => fake()->unique()->jobTitle(),
            'hobby_description' => fake()->unique()->paragraph(),
        ];
    }
}
