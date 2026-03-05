<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('absensis', function (Blueprint $table) {

            // Tambahkan kolom id_sesi setelah tanggal (opsional posisi)
            $table->foreignId('id_sesi')
                ->nullable()
                ->after('tanggal')
                ->constrained('sesis')
                ->nullOnDelete();

            // Tambahkan unique constraint
            $table->unique(['id_kelas', 'tanggal', 'id_sesi']);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('absensis', function (Blueprint $table) {

            $table->dropUnique(['id_kelas', 'tanggal', 'id_sesi']);

            $table->dropForeign(['id_sesi']);
            $table->dropColumn('id_sesi');
        });
    }
};