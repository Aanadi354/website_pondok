<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::table('list_santris', function (Blueprint $table) {
            // Tambah kolom foto (nullable)
            $table->string('foto')->nullable()->after('nomor');

            // Tambah id_kelas (foreign key)
            $table->unsignedBigInteger('id_kelas')->nullable()->after('foto');

            $table->foreign('id_kelas')
                  ->references('id')
                  ->on('kelas')
                  ->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('list_santris', function (Blueprint $table) {
            $table->dropForeign(['id_kelas']);
            $table->dropColumn(['foto', 'id_kelas']);
        });
    }
};
