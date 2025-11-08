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
        Schema::create('laboratory_uses', function (Blueprint $table) {
            $table->id();
            $table->foreignId('teachers_id')->constrained()->onDelete('cascade');
            $table->foreignId('studies_id')->constrained()->onDelete('cascade');
            $table->foreignId('classrooms_id')->constrained()->onDelete('cascade');
            $table->dateTime('entry_time')->nullable();
            $table->dateTime('close_time')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laboratory_uses');
    }
};
