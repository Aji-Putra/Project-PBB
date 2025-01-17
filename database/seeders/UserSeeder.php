<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Admin User',
            'username' => 'admin',
            'password' => bcrypt('password'), // Ganti dengan kata sandi aman
            'role' => 'admin',
        ]);

        User::create([
            'name' => 'Juri User',
            'username' => 'juri',
            'password' => bcrypt('password'), // Ganti dengan kata sandi aman
            'role' => 'juri',
        ]);
    }
}
