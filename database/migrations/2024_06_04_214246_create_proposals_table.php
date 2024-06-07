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
        Schema::create('proposals', function (Blueprint $table) {
            $table->id();
            // ID from user who belongs the idea
            // When we delete a user, we delet his proposals -> cascadeOnDelete()
            // Foreign key
            $table->foreignId('user_id')-> constrained()->cascadeOnDelete();
            $table->string('title');
            $table->text('description');
            // Likes
            $table->unsignedBigInteger('likes');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('proposals');
    }
};
