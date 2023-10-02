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
        Schema::create('delivery_orders', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->cascadeOnDelete();
            $table->string('user_name');
            $table->string('phone');
            $table->string('address');

            $table->unsignedBigInteger('delivery_user_id')->nullable();
            $table->foreign('delivery_user_id')->references('id')->on('users');


            $table->unsignedTinyInteger('status');
            $table->date('placement_date');
            $table->date('pick_up_date')->nullable();
            $table->date('delivery_date')->nullable();

            $table->text('notes')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('delivery_orders');
    }
};
