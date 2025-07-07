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
        Schema::create('penumpangs', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->integer('usia');
            $table->string('kota');
            $table->integer('tahun_lahir');
            $table->string('kode_booking', 12)->unique(); // Format: 230100010001
            $table->string('lokasi_penjemputan');
            $table->string('whatsapp_number')->nullable();
            $table->foreignId('travel_id')->constrained('travels')->onDelete('cascade');
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('penumpangs');
    }
};