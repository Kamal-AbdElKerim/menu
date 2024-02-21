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
        Schema::create('subscriptions', function (Blueprint $table) {
            $table->id('SubscriptionID');
            $table->string('PlanName', 50);
            $table->string('Description', 255)->nullable();
            $table->integer('NumMenuItemsAllowed')->nullable();
            $table->string('MediaTypesAllowed', 100)->nullable();
            $table->integer('ScansAllowed')->nullable();
            $table->string('Duration', 50)->nullable();
            $table->decimal('Price', 10, 2)->nullable();
            $table->timestamps();

            // Foreign key constraint
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('subscriptions');
    }
};
