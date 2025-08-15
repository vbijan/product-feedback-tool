<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'),
            'user_type' => 'admin',
        ]);

        // Developer 1
        User::create([
            'name' => 'Developer One',
            'email' => 'developer1@example.com',
            'password' => Hash::make('password'),
            'user_type' => 'developer',
        ]);

        // Developer 2
        User::create([
            'name' => 'Developer Two',
            'email' => 'developer2@example.com',
            'password' => Hash::make('password'),
            'user_type' => 'developer',
        ]);
    }
}
