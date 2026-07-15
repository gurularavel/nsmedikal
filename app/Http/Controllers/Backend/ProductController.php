<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreProductRequest;
use App\Http\Requests\UpdateProductRequest;
use App\Models\Product;
use App\Models\ProductCategory;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class ProductController extends Controller
{
    public function index(): View
    {
        $products = Product::with('productCategory')->paginate();

        return view('backend.products.index', compact('products'));
    }

    public function create(): View
    {
        $productCategories = ProductCategory::query()->where('status', ProductCategory::IS_ACTIVE)->get();

        return view('backend.products.create', compact('productCategories'));
    }

    public function store(StoreProductRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['image'] = FileService::upload('products', $request->file('image'));

        Product::query()->create($data);

        return to_route('backend.products.index')->with('success', __('create'));
    }

    public function show(Product $product): View
    {
        return view('backend.products.show', compact('product'));
    }

    public function edit(Product $product): View
    {
        $productCategories = ProductCategory::query()->where('status', ProductCategory::IS_ACTIVE)->get();

        return view('backend.products.edit', compact('product', 'productCategories'));
    }

    public function update(UpdateProductRequest $request, Product $product): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            FileService::delete('products', $product->getAttribute('image'));

            $data['image'] = FileService::upload('products', $request->file('image'));
        }

        $product->update($data);

        return to_route('backend.products.index')->with('success', __('update'));
    }

    public function destroy(Product $product): RedirectResponse
    {
        FileService::delete('products', $product->getAttribute('image'));

        $product->delete();

        return back()->with('success', __('delete'));
    }
}
