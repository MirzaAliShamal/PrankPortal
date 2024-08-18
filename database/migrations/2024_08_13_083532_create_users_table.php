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
            $table->id();
             $table->string('name', 60)->nullable();
            $table->string('email', 60);
            $table->string('password');
            $table->string('ip')->nullable();
            $table->string('ua')->nullable();
            $table->string('phone_otp')->nullable();
            $table->string('two_fa')->nullable();
            $table->string('status')->nullable();
            $table->timestamps();
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
