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
        Schema::create('addresses', function (Blueprint $table) {
            $table->id();
            $table->string('address_1')->nullable();
            $table->string('address_2')->nullable();
            $table->string('ward')->nullable();
            $table->string('ward_id')->nullable();
            $table->string('district')->nullable();
            $table->string('district_id')->nullable();
            $table->string('province')->nullable();
            $table->string('province_id')->nullable();
            $table->bigInteger('user_id');
            $table->boolean('type')->default('0');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('address');
    }
};
