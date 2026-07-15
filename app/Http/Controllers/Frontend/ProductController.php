<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $productCategories = ProductCategory::query()
            ->where('status', ProductCategory::IS_ACTIVE)
            ->where('products_page_show', !ProductCategory::NOT_SHOW_IN_PRODUCTS_PAGE)
            ->get('id');

        $products = Product::query()
            ->where('status', Product::IS_ACTIVE)
            ->whereIn('product_category_id', $productCategories->pluck('id')->toArray())
            ->cursor();

        return view('frontend.products', compact('productCategories', 'products'));
    }
}
