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
        'username' => 'adminpppm',
        'password' => 'password123',
        'nama_lengkap' => 'Admin PPPM',
        'role' => 'admin',
    ]);
}
}
