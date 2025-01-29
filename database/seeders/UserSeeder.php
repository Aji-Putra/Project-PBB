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
            'role' => 'panitia',
            'password' => bcrypt('password'), // Ganti dengan kata sandi aman

        ]);

        User::create([
            'name' => 'Juri PBB 1',
            'username' => 'juripbb1',
            'role' => 'PBB',
            'password' => bcrypt('password'), // Ganti dengan kata sandi aman,
        ]);
        User::create([
            'name' => 'Juri PBB 2 ',
            'username' => 'juripbb2',
            'role' => 'PBB',
            'password' => bcrypt('password'), // Ganti dengan kata sandi aman,
        ]);
        User::create([
            'name' => 'Juri PBB 3',
            'username' => 'juripbb3',
            'role' => 'PBB',
            'password' => bcrypt('password'), // Ganti dengan kata sandi aman,
        ]);
        User::create([
            'name' => 'Juri Vafor',
            'username' => 'jurivafor',
            'role' => 'vafor',
            'password' => bcrypt('password'), // Ganti dengan kata sandi aman
        ]);
        User::create([
            'name' => 'Juri Kostum',
            'username' => 'jurikostum',
            'role' => 'kostum',
            'password' => bcrypt('password'), // Ganti dengan kata sandi aman
        ]);
    }
}
