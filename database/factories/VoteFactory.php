<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vote>
 */
class VoteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'vote_award' => fake()->name(),
            'id_user' => rand(1, User::count()),
            'id_award'=> fake()->name(),
            'id_rockband'=> fake()->name(),
        ];
    }
}
