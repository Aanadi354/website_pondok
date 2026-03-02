<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class GuruSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('guru')->insert([
            [
                'nama_guru' => 'Alvan',
                'alamat' => 'Bangkalan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_guru' => 'Alvi',
                'alamat' => 'Bangkalan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_guru' => 'Aziz',
                'alamat' => 'Bangkalan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_guru' => 'Rifqi',
                'alamat' => 'Bangkalan',
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}