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
        Schema::create('items', function (Blueprint $table) {
            $table->id();
            $table->string('channel')->comment('チャンネル名');
            $table->string('chaanelid')->nullable()->comment('チャンネルid');
            $table->string('title')->nullable();
            $table->string('explain')->comment('動画説明')->nullable();
            $table->string('url')->nullable();
            $table->string('youtubeview')->comment('youtube再生数')->nullable();
            $table->string('youtubelike')->comment('youtube高評価数')->nullable();
            $table->string('like')->comment('サイトいいね数')->nullable();
            $table->string('view')->comment('サイト再生数')->nullable();
            $table->string('name')->comment('人物名')->nullable();
            $table->time('movietime')->nullable();
            $table->string('keyword')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('item');
    }
};
