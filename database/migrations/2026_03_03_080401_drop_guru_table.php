<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::dropIfExists('guru');
    }

    public function down(): void
    {
        Schema::create('guru', function ($table) {
            $table->id();
            $table->string('nama_guru');
            $table->text('alamat');
            $table->timestamps();
        });
    }
};