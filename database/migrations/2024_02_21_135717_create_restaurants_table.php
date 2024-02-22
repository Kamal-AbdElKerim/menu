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
        Schema::create('restaurants', function (Blueprint $table) {
            $table->id('RestaurantID');
            $table->string('Name', 255);
            $table->string('Address', 255);
            $table->unsignedBigInteger('UserID');

            $table->string('Hours', 255);
            // Add additional restaurant information fields as needed
            // $table->string('additional_field');
            // ...
            $table->foreign('UserID')->references('id')->on('users')->onDelete('cascade');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('restaurants');
    }
};
