<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class CastsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 10; $i++) {
            DB::table('casts')->insert([
                'id' => Str::uuid(),
                'name' => "Cast $i",
                'age' => rand(20, 60),
                'biodata' => 'Sample biodata for cast ' . $i,
                'avatar' => 'default_avatar.png',
            ]);
        }
    }
}
