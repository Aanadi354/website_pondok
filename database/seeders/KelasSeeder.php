<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
use Carbon\Carbon;

class KelasSeeder extends Seeder
{
    public function run(): void
    {
        $now = Carbon::now();

        // Ambil ID guru berdasarkan username
        $alvi  = User::where('username', 'alvi')->where('role', 'guru')->first();
        $alvan = User::where('username', 'alvan')->where('role', 'guru')->first();
        $rifqi = User::where('username', 'rifqi')->where('role', 'guru')->first();
        $aziz  = User::where('username', 'aziz')->where('role', 'guru')->first();

        DB::table('kelas')->insert([
            [
                'nama_kelas' => 'Pegon',
                'id_guru' => $alvi?->id,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kelas' => 'Bacaan',
                'id_guru' => $alvi?->id,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kelas' => 'Lambatan',
                'id_guru' => $alvan?->id,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kelas' => 'Cepatan',
                'id_guru' => $rifqi?->id,
                'created_at' => $now,
                'updated_at' => $now,
            ],
            [
                'nama_kelas' => 'Saringan',
                'id_guru' => $aziz?->id,
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