<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        // Drop index lama jika ada
        DB::statement('ALTER TABLE absensis DROP INDEX absensis_id_kelas_tanggal_unique');
        DB::statement('ALTER TABLE absensis DROP INDEX absensis_id_kelas_tanggal_id_sesi_unique');

        Schema::table('absensis', function (Blueprint $table) {
            $table->unique(['id_kelas', 'tanggal', 'id_sesi']);
        });
    }

    public function down(): void
    {
        Schema::table('absensis', function (Blueprint $table) {
            $table->dropUnique(['id_kelas', 'tanggal', 'id_sesi']);
        });
    }
}; 