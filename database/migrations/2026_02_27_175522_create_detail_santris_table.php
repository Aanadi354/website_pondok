<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('detail_santris', function (Blueprint $table) {
            $table->id();

            // Foreign Key ke list_santris
            $table->foreignId('santri_id')
                  ->constrained('list_santris')
                  ->onDelete('cascade');

            // Foto (hanya nama file)
            $table->string('foto')->nullable();

            // Kelas (enum pilihan)
            $table->enum('kelas', [
                'pegon',
                'bacaan',
                'lambatan',
                'cepatan',
                'saringan',
                'MT'
            ]);

            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_santris');
    }
};