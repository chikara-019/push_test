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
        Schema::create('home_budgets', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            // $table->date('date')->default(now()); // デフォルト値を現在の日付に設定

            $table->integer('category_id');
            $table->integer('price'); 
            $table->timestamps(); 
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('home_budgets');
    }
};
