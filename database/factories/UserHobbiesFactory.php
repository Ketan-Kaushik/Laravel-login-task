<?php

namespace Database\Factories;

use App\Models\Hobbies;
use App\Models\Users;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Foundation\Auth\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User_Hobbies>
 */
class UserHobbiesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'hobbies_id' => Hobbies::factory(),
            'user_id' => Users::factory(),
        ];
    }
}
