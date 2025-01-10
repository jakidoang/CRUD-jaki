<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;


/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'id' => Str::uuid(),
            'biodata' => $this->faker->paragraph,
            'age' => $this->faker->numberBetween(18, 50),
            'address' => $this->faker->address,
            'avatar' => 'default_avatar.png',
            'user_id' => User::factory(),
        ];
    }
}
