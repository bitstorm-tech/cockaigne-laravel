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
        Schema::create('dealers', function (Blueprint $table) {
            $table->id()->startingValue(54321);
            $table->foreignId('user_id')->constrained()->references('id')->on('users')->cascadeOnDelete();
            $table->foreignId('category_id')->constrained()->references('id')->on('categories');
            $table->string('street');
            $table->string('house_number');
            $table->string('city');
            $table->integer('postal_code');
            $table->string('phone');
            $table->string('tax_id');
            $table->geometry('location', 'point', 4326);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('dealers');
    }
};
