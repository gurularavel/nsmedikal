<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('slider_translations', function (Blueprint $table) {
            $table->id();
            $table->foreignId('slider_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 2)->index();
            $table->string('title');
            $table->string('button_text')->nullable();
            $table->string('button_url')->nullable();
            $table->unique(['slider_id', 'locale']);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('slider_translations');
    }
};
