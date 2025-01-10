<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            RolesTableSeeder::class,
            GenresTableSeeder::class,
            CastsTableSeeder::class,
            MoviesTableSeeder::class,
            UsersTableSeeder::class,
            ProfilesTableSeeder::class,
            ReviewsTableSeeder::class,
            CastMoviesTableSeeder::class,
        ]);
    }
}
