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
        Schema::create('occasion_products', function (Blueprint $table) {
            $table->foreignId('product_id')->constrained();
            $table->foreignId('occasion_id')->constrained();
            $table->primary(['product_id', 'occasion_id']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('occasion_products');
    }
};
