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
        Schema::create('pengurus_jabatan', function (Blueprint $table) {
            $table->uuid('id_pengurus_jabatan')->primary();
            $table->string('nama_jabatan');
            // $table->date('tanggal_mulai');
            // $table->date('tanggal_selesai')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengurus_jabatan');
    }
};
