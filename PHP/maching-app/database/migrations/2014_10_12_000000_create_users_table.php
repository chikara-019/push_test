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
            $table->string('name');
            $table->string('login_id', 20)->comment('ログインID');
            $table->unique(['login_id']);
            $table->string('nickname')->nullable();
            $table->string('gender')->nullable();
            $table->string('email')->unique();
            $table->date('birthdate')->nullable();
            $table->string('occupation')->nullable();
            $table->text('hobbies')->nullable();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
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
