<?php

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('qrcodes', function (Blueprint $table) {
            $table->id('QRCodeID');
            $table->unsignedBigInteger('MenuID');
            $table->string('QRCode', 255);
            $table->timestamp('GeneratedAt')->default(DB::raw('CURRENT_TIMESTAMP'));
            // Add additional QR code information fields as needed
            // $table->string('additional_field');
            // ...

            $table->timestamps();

            // Foreign key constraint
            $table->foreign('MenuID')->references('MenuID')->on('menus')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('qrcodes');
    }
};
