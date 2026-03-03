<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('absensis', function (Blueprint $table) {
            $table->id();

            // Relasi ke kelas
            $table->foreignId('id_kelas')
                  ->constrained('kelas')
                  ->cascadeOnDelete();

            // Relasi ke users (guru yang menginput)
            $table->foreignId('id_user')
                  ->constrained('users')
                  ->cascadeOnDelete();

            $table->date('tanggal');

            // Supaya 1 kelas tidak bisa absen 2x di tanggal sama
            $table->unique(['id_kelas', 'tanggal']);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('absensis');
    }
};