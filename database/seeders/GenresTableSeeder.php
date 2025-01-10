<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GenresTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $genres = ['Action', 'Comedy', 'Drama', 'Horror', 'Sci-Fi'];
        foreach ($genres as $genre) {
            DB::table('genres')->insert([
                'id' => Str::uuid(),
                'name' => $genre,
            ]);
        }
    }
}
