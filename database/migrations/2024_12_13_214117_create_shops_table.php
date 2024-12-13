<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('shops', function (Blueprint $table) {
            $table->uuid('id')->primary();
            $table->integer('default_category');
            $table->string('street');
            $table->string('house_number');
            $table->string('city');
            $table->integer('zip');
            $table->string('phone');
            $table->string('tax_id');
            $table->magellanPoint('location');
            $table->timestamps();
        });

        Schema::table('users', function (Blueprint $table) {
            $table->foreignUuid('shop_id')->nullable()->constrained();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropColumns('users', 'shop_id');
        Schema::dropIfExists('shops');
    }
};
