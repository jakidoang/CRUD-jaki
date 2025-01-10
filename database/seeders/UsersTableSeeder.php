<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $roles = DB::table('roles')->pluck('id')->toArray();
        for ($i = 1; $i <= 10; $i++) {
            DB::table('users')->insert([
                'id' => Str::uuid(),
                'name' => "User $i",
                'email' => "user$i@example.com",
                'password' => bcrypt('password'),
                'email_verified_at' => now(),
                'role_id' => $roles[array_rand($roles)],
            ]);
        }
    }
}
