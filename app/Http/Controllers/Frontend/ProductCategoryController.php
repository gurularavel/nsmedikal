<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use Illuminate\View\View;

class ProductCategoryController extends Controller
{
    public function show(): View
    {
        return view('frontend.product_categories');
    }
}
