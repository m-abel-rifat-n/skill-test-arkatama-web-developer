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
        Schema::create('car_fleets', function (Blueprint $table) {
            $table->id();
            $table->string('name'); // Bus Pariwisata, Minibus, Hiace, dll
            $table->string('type'); // Bus, Minibus, Van
            $table->integer('capacity'); // Kapasitas penumpang
            $table->string('plat_number')->unique();
            $table->enum('status', ['available', 'maintenance', 'unavailable'])->default('available');
            $table->text('description')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('car_fleets');
    }
};