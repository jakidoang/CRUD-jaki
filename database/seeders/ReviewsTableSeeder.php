<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ReviewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('users')->pluck('id')->toArray();
        $movies = DB::table('movies')->pluck('id')->toArray();
        for ($i = 1; $i <= 20; $i++) {
            DB::table('reviews')->insert([
                'id' => Str::uuid(),
                'review' => 'This is a review for movie ' . $i,
                'rating' => rand(1, 5),
                'user_id' => $users[array_rand($users)],
                'movie_id' => $movies[array_rand($movies)],
            ]);
        }
    }
}
