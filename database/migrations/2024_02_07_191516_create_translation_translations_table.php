<?php

declare(strict_types=1);

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('translation_translations', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignId('translation_id')->constrained()->cascadeOnUpdate()->cascadeOnDelete();
            $table->string('locale', 2)->index();
            $table->text('value');
            $table->timestamps();
            $table->unique(['translation_id', 'locale']);
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('translation_translations');
    }
};
