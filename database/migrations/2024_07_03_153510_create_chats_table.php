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
        Schema::create('chats', function (Blueprint $table) {
            $table->id();
            $table->foreign('owner_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('guest_id')->references('id')->on('users')->onDelete('cascade');
            $table->unsignedBigInteger('owner_id')->unique();
            $table->unsignedBigInteger('guest_id')->unique();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('chats');
    }
};
