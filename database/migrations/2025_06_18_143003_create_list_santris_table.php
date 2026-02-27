<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('list_santris', function (Blueprint $table) {
        $table->id(); // Ini sebagai 'no'
        $table->string('nomor_induk');
        $table->string('nama');
        $table->enum('jenis_kelamin', ['PRIA', 'WANITA']);
        $table->text('alamat');
        $table->string('orang_tua');
        $table->string('nomor');
        $table->timestamps();
    });
}


    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('list_santris');
    }
};
