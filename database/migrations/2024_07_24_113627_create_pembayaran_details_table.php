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
        Schema::create('pembayaran_details', function (Blueprint $table) {
            $table->uuid('id_pembayaran_detail')->primary();
            $table->uuid('pembayaran_id');
            $table->string('deskripsi', 255);
            $table->integer('bayar');
            $table->timestamps();

            // Foreign key constraint
            $table->foreign('pembayaran_id')->references('id_pembayaran')->on('pembayaran')->onDelete('cascade');
        
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pembayaran_details');
    }
};
