<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class SesiSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('sesis')->insert([
            [
                'nama_sesi' => 'Pengajian Pagi',
                'jam_mulai' => '04:30:00',
                'jam_selesai' => '06:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ],
            [
                'nama_sesi' => 'PengajianMalam',
                'jam_mulai' => '19:30:00',
                'jam_selesai' => '21:00:00',
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now(),
            ]
        ]);
    }
}