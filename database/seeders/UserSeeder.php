<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'username' => 'adminpppm2',
            'password' => 'pppm123', // Model akan auto-hash via setPasswordAttribute
            'nama_lengkap' => 'Admin PPPM',
            'role' => 'admin',
        ]);
    }
}