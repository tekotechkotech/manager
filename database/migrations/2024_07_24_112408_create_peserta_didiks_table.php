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
        Schema::create('peserta_didik', function (Blueprint $table) {
            $table->uuid('id_peserta_didik')->primary();
            $table->uuid('user_id');
            $table->uuid('cabang_id');
            $table->string('nama', 100);
            $table->string('nis', 20)->unique();
            $table->date('tanggal_lahir');
            $table->string('alamat');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('user_id')->references('id_user')->on('user')->onDelete('cascade');
            $table->foreign('cabang_id')->references('id_instasi_cabang')->on('instasi_cabang')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('peserta_didik');
    }
};
