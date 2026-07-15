<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyCategoryRequest;
use App\Http\Requests\UpdateCompanyCategoryRequest;
use App\Models\CompanyCategory;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CompanyCategoryController extends Controller
{
    public function index(): View
    {
        $companyCategories = CompanyCategory::query()->paginate();

        return view('backend.company_categories.index', compact('companyCategories'));
    }

    public function create(): View
    {
        return view('backend.company_categories.create');
    }

    public function store(StoreCompanyCategoryRequest $request): RedirectResponse
    {
        CompanyCategory::query()->create($request->validated());

        return to_route('backend.company_categories.index')->with('success', __('create'));
    }

    public function show(CompanyCategory $companyCategory): View
    {
        return view('backend.company_categories.show', compact('companyCategory'));
    }

    public function edit(CompanyCategory $companyCategory): View
    {
        return view('backend.company_categories.edit', compact('companyCategory'));
    }

    public function update(UpdateCompanyCategoryRequest $request, CompanyCategory $companyCategory): RedirectResponse
    {
        $companyCategory->update($request->validated());

        return to_route('backend.company_categories.index')->with('success', __('update'));
    }

    public function destroy(CompanyCategory $companyCategory): RedirectResponse
    {
        $companyCategory->delete();

        return back()->with('success', __('delete'));
    }
}
