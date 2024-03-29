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
        Schema::create('users', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('name');
            $table->unsignedBigInteger('sub_id')->nullable();
            $table->unsignedBigInteger('restaurants_id')->nullable();
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->text('two_factor_secret')->nullable();
            $table->text('two_factor_recovery_codes')->nullable();
            $table->timestamp('two_factor_confirmed_at')->nullable();
            $table->integer('Is_active')->default(0);
            $table->string('google_id')->nullable();
            $table->rememberToken();
            $table->timestamps();

            // Foreign Key Constraints
            $table->foreign('sub_id')->references('SubscriptionID')->on('subscriptions')->onDelete('cascade');
            $table->foreign('restaurants_id')->references('RestaurantID')->on('restaurants')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
