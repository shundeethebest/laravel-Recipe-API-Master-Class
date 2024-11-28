<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Dish>
 */
class DishFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id'       => User::factory(),
            'name'          => fake()->words(3, true),
            'description'   => fake()->paragraph(),
            'images'        => fake()->imageUrl(640, 480, 'dish', true),
            'region'        => fake()->country(),
            'type'          => fake()->randomElement(['A', 'C', 'H', 'X']),
        ];
    }
}
