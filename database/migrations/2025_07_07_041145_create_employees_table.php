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
        Schema::create('employees', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('employee_id')->unique(); // Format: #234540HR/YTG
            $table->enum('employee_type', ['Full-time', 'Part-time', 'Contract', 'Internship'])->default('Full-time');
            $table->date('date_of_entry');
            $table->foreignId('division_id')->constrained('divisions')->onDelete('cascade');
            $table->foreignId('position_id')->constrained('positions')->onDelete('cascade');
            $table->string('phone_number')->nullable();
            $table->enum('status', ['Active', 'Inactive'])->default('Active');
            $table->string('avatar')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('employees');
    }
};