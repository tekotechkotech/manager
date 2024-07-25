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
        Schema::create('pengurus', function (Blueprint $table) {
            $table->uuid('id_pengurus')->primary();
            $table->uuid('user_id');
            $table->uuid('jabatan_id');
            $table->uuid('cabang_id');
            // $table->date('tanggal_mulai');
            // $table->date('tanggal_selesai')->nullable();
            $table->text('keterangan')->nullable();
            $table->enum('status', ['aktif', 'non_aktif'])->default('aktif');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id_user')->on('user')->onDelete('cascade');
            $table->foreign('jabatan_id')->references('id_pengurus_jabatan')->on('pengurus_jabatan')->onDelete('cascade');
            $table->foreign('cabang_id')->references('id_instansi_cabang')->on('instansi_cabang')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengurus');
    }
};
