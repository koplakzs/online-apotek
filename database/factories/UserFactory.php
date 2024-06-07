<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
            'email' => "admin@gmail.com",
            'password' => '$2y$10$3QTPpn5CyfAyiptWaBsUGOGEBIQwEkwXvliSwvjYcXz/3m8qnTu5i', // password
        ];
    }
}
