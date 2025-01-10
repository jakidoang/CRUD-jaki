<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Movie>
 */
class MovieFactory extends Factory
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
            'title' => $this->faker->sentence(3),
            'synopsis' => $this->faker->paragraph(),
            'poster' => 'default_poster.png',
            'year' => $this->faker->year(),
            'available' => $this->faker->boolean(),
            'genre_id' => \App\Models\Genre::factory(),
        ];
    }
}
