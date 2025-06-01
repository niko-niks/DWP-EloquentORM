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
        $table->string('email')->unique()->notNullable();
        $table->string('password')->notNullable();
        $table->string('name')->notNullable();
        $table->string('remember_token')->nullable();
        $table->timestamp('email_verified_at')->nullable();
        $table->timestamp('registration_date')->nullable();
        $table->timestamp('last_login_date')->nullable();
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
