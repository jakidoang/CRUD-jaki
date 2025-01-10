<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = DB::table('genres')->pluck('id')->toArray();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('movies')->insert([
                'id' => Str::uuid(),
                'title' => "Movie $i",
                'synopsis' => 'This is the synopsis of movie ' . $i,
                'poster' => 'default_poster.png',
                'year' => rand(2000, 2025),
                'available' => rand(0, 1),
                'genre_id' => $genres[array_rand($genres)],
            ]);
        }
    }
}
