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
        Schema::create('instansi_cabang', function (Blueprint $table) {
            $table->uuid('id_instansi_cabang')->primary();
            $table->uuid('instansi_id');
            $table->string('nama', 100);
            $table->string('alamat');
            $table->string('telepon', 15)->nullable();
            $table->string('email')->unique();
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
        Schema::dropIfExists('instansi_cabang');
    }
};
