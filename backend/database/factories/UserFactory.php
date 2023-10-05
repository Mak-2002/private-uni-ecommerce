<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'email' => fake()->unique()->safeEmail(),
            'password' => '$2y$10$6B6CpBmutv1uRrmBfFEEnOI4QgxHfUaC3zZ/FzOFrqSn7GJ8xmbYG', // Hashed value of 12345678
            'remember_token' => Str::random(10),
            'role' => fake()->numberBetween(1, 2),
        ];
    }
}
