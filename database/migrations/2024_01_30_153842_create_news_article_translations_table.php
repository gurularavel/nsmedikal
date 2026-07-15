<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('news_article_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('news_article_id')->constrained()->cascadeOnDelete();
            $table->string('locale', 2)->index();
            $table->string('title');
            $table->text('description')->nullable();
            $table->text('content');
            $table->text('meta_description')->nullable();
            $table->string('meta_keywords')->nullable();
            $table->unique(['news_article_id', 'locale']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('news_article_translations');
    }
};
