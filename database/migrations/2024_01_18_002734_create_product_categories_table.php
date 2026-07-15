<?php

use App\Models\ProductCategory;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('product_categories', function (Blueprint $table) {
            $table->id();
            $table->string('slug');
            $table->boolean('main_page_show')->default(ProductCategory::NOT_SHOW_IN_MAIN_PAGE);
            $table->boolean('products_page_show')->default(!ProductCategory::NOT_SHOW_IN_PRODUCTS_PAGE);
            $table->boolean('status')->default(ProductCategory::IS_ACTIVE);
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('product_categories');
    }
};
