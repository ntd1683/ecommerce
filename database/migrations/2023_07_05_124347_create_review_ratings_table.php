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
        Schema::create('review_ratings', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('product_id');
            $table->bigInteger('user_id');
            $table->longText('comment')->nullable();
            $table->integer('star_rating')->nullable();
            $table->boolean('status')->default(0);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('review_ratings');
    }
};
