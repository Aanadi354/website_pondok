<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        DB::table('kelas')->insert([
            [
                'nama_kelas' => 'Pegon',
                'id_guru' => 2, // Alvi
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kelas' => 'Bacaan',
                'id_guru' => 2, // Alvi
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kelas' => 'Lambatan',
                'id_guru' => 1, // Alvan
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kelas' => 'Cepatan',
                'id_guru' => 4, // Rifqi
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kelas' => 'Saringan',
                'id_guru' => 3, // Aziz
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kelas' => 'Lulus',
                'id_guru' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kelas' => 'Non Aktif',
                'id_guru' => null,
                'created_at' => $now,
                'updated_at' => $now,
            ],
        ]);
    }
}