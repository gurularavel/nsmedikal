<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use App\Models\Company;
use App\Models\CompanyCategory;
use App\Services\FileService;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class CompanyController extends Controller
{
    public function index(): View
    {
        $companies = Company::with('companyCategory')->paginate();

        return view('backend.companies.index', compact('companies'));
    }

    public function create(): View
    {
        $companyCategories = CompanyCategory::query()->where('status', CompanyCategory::IS_ACTIVE)->get();

        return view('backend.companies.create', compact('companyCategories'));
    }

    public function store(StoreCompanyRequest $request): RedirectResponse
    {
        $data = $request->validated();

        $data['image'] = FileService::upload('companies', $request->file('image'));

        Company::query()->create($data);

        return to_route('backend.companies.index')->with('success', __('create'));
    }

    public function show(Company $company): View
    {
        return view('backend.companies.show', compact('company'));
    }

    public function edit(Company $company): View
    {
        $companyCategories = CompanyCategory::query()->where('status', CompanyCategory::IS_ACTIVE)->get();

        return view('backend.companies.edit', compact('company', 'companyCategories'));
    }

    public function update(UpdateCompanyRequest $request, Company $company): RedirectResponse
    {
        $data = $request->validated();

        if ($request->hasFile('image')) {
            FileService::delete('companies', $company->getAttribute('image'));

            $data['image'] = FileService::upload('companies', $request->file('image'));
        }

        $company->update($data);

        return to_route('backend.companies.index')->with('success', __('update'));
    }

    public function destroy(Company $company): RedirectResponse
    {
        FileService::delete('companies', $company->getAttribute('image'));

        $company->delete();

        return back()->with('success', __('delete'));
    }
}
