<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CastMoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $casts = DB::table('casts')->pluck('id')->toArray();
        $movies = DB::table('movies')->pluck('id')->toArray();
        for ($i = 1; $i <= 20; $i++) {
            DB::table('cast_movies')->insert([
                'id' => Str::uuid(),
                'cast_id' => $casts[array_rand($casts)],
                'movie_id' => $movies[array_rand($movies)],
            ]);
        }
    }
}
