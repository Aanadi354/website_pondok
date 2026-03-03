<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('absensi_details', function (Blueprint $table) {
            $table->id();

            // Header absensi
            $table->foreignId('id_absensi')
                  ->constrained('absensis')
                  ->cascadeOnDelete();

            // Santri
            $table->foreignId('id_santri')
                  ->constrained('list_santris')
                  ->cascadeOnDelete();

            $table->enum('status', [
                'hadir',
                'izin',
                'sakit',
                'alpha'
            ]);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('absensi_details');
    }
};