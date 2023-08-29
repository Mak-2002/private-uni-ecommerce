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
        Schema::create('products', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->decimal('price', 10, 2);
            $table->decimal('off', 10, 2)->default(0);
            $table->text('about')->nullable();
            $table->boolean('isAvailable')->default(true);
            $table->integer('quantity')->default(1);
            $table->integer('rating_sum')->default(0);
            $table->integer('rating_count')->default(0);
            $table->string('category');
            $table->foreign('category')->references('name')->on('categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('products');
    }
};
