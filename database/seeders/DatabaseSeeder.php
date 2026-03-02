<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
    
        // Jalankan UserSeeder
        $this->call([
            UserSeeder::class,
            GuruSeeder::class, // jika ingin sekalian jalankan guru
            KelasSeeder::class,
        ]);
    }
}