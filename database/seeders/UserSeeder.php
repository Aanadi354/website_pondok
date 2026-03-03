<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        // Admin
        User::create([
            'username' => 'adminpppm2',
            'password' => 'pppm123', // auto hash di model
            'nama_lengkap' => 'Admin PPPM',
            'role' => 'admin',
        ]);

        // Guru
        User::create([
            'username' => 'alvi',
            'password' => 'guru123',
            'nama_lengkap' => 'Alvi',
            'role' => 'guru',
        ]);

        User::create([
            'username' => 'alvan',
            'password' => 'guru123',
            'nama_lengkap' => 'Alvan',
            'role' => 'guru',
        ]);

        User::create([
            'username' => 'rifqi',
            'password' => 'guru123',
            'nama_lengkap' => 'Rifqi',
            'role' => 'guru',
        ]);

        User::create([
            'username' => 'aziz',
            'password' => 'guru123',
            'nama_lengkap' => 'Aziz',
            'role' => 'guru',
        ]);
    }
}