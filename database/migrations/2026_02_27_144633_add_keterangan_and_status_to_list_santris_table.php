<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('list_santris', function (Blueprint $table) {
            $table->enum('keterangan', ['Aktif', 'Non Aktif'])
                  ->default('Aktif')
                  ->after('nomor');

            $table->string('status')
                  ->nullable()
                  ->after('keterangan');
        });
    }

    public function down(): void
    {
        Schema::table('list_santris', function (Blueprint $table) {
            $table->dropColumn(['keterangan', 'status']);
        });
    }
};