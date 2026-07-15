<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductCategoryRequest;
use App\Http\Requests\UpdateProductCategoryRequest;
use App\Models\ProductCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductCategoryController extends Controller
{
    public function index(): View
    {
        $productCategories = ProductCategory::query()->paginate();

        return view('backend.product_categories.index', compact('productCategories'));
    }

    public function create(): View
    {
        return view('backend.product_categories.create');
    }

    public function store(StoreProductCategoryRequest $request): RedirectResponse
    {
        ProductCategory::query()->create($request->validated());

        return to_route('backend.product_categories.index')->with('success', __('create'));
    }

    public function show(ProductCategory $productCategory): View
    {
        return view('backend.product_categories.show', compact('productCategory'));
    }

    public function edit(ProductCategory $productCategory): View
    {
        return view('backend.product_categories.edit', compact('productCategory'));
    }

    public function update(UpdateProductCategoryRequest $request, ProductCategory $productCategory): RedirectResponse
    {
        $productCategory->update($request->validated());

        return to_route('backend.product_categories.index')->with('success', __('update'));
    }

    public function destroy(ProductCategory $productCategory): RedirectResponse
    {
        $productCategory->delete();

        return back()->with('success', __('delete'));
    }
}
