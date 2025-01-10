<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class ProfilesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $users = DB::table('users')->pluck('id')->toArray();
        foreach ($users as $userId) {
            DB::table('profiles')->insert([
                'id' => Str::uuid(),
                'biodata' => 'Sample biodata for user',
                'age' => rand(18, 50),
                'address' => 'Sample address',
                'avatar' => 'default_avatar.png',
                'user_id' => $userId,
            ]);
        }
    }
}
