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
        Schema::create('pembayaran', function (Blueprint $table) {
            $table->uuid('id_pembayaran')->primary();
            $table->uuid('peserta_didik_id');
            $table->text('daftar_biaya');
            $table->decimal('jumlah_biaya', 15, 2);
            $table->string('keterangan')->nullable();
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('peserta_didik_id')->references('id_peserta_didik')->on('peserta_didik')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran');
    }
};
