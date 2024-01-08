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
        Schema::create('skills', function (Blueprint $table) {
            $table->id();
            $table->foreignId('resume_id');
            $table->foreignId('experience_id');
            $table->text('description');
            $table->string('type');
            $table->timestamps();

            $table->foreign('resume_id')->references('id')->on('resumes')->onDelete('cascade');
            $table->foreign('experience_id')->references('id')->on('experiences')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('skills');
    }
};
