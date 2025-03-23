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
        Schema::create('pro_users', function (Blueprint $table) {
            $table->id()->startingValue(54321);
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('age_id')->nullable()->constrained()->references('id')->on('ages');
            $table->foreignId('gender_id')->nullable()->constrained()->references('id')->on('genders');
            $table->boolean('use_location_service')->default(false);
            $table->integer('search_radius_meters')->default(100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pro_users');
    }
};
