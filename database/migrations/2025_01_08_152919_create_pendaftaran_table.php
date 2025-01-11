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
        Schema::create('pendaftaran', function (Blueprint $table) {
            $table->id();
            $table->string('nama_santri_baru');
            $table->string('alamat');
            $table->timestamp('tgl')->nullable();
            $table->string('nisn');
            $table->string('nama_orang_tua');
            $table->string('asal_sekolah');
            $table->string('nomor_telepon');
            $table->string('jenis_kelamin');
            $table->timestamps();
        });
    }
    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pendaftaran');
    }
};
