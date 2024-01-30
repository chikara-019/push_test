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
        Schema::create('user_comedians', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id')->comment('ユーザーid');
            $table->unsignedBigInteger('comedian_id')->comment('芸人id');
            $table->timestamps();

            $table->foreign('user_id')->references('id')->on('users');
            $table->foreign('comedian_id')->references('id')->on('comedians');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_comedians');
    }
};
