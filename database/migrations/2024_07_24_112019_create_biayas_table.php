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
        Schema::create('biaya', function (Blueprint $table) {
            $table->uuid('id_biaya')->primary();
            $table->uuid('instansi_id');
            $table->string('nama', 100);
            $table->integer('biaya'); // Kolom wajib
            $table->text('deskripsi')->nullable(); // Kolom opsional
            $table->enum('status', ['aktif', 'non_aktif'])->default('aktif');
            $table->enum('jenis_biaya', ['wajib', 'opsional'])->default('wajib');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('instansi_id')->references('id_instansi')->on('instansi')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('biaya');
    }
};
