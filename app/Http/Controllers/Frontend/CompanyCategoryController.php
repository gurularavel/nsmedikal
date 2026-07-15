<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\CompanyCategory;
use Illuminate\View\View;

class CompanyCategoryController extends Controller
{
    public function show(string $locale, CompanyCategory $companyCategory): View
    {
        return view('frontend.company_categories', compact('companyCategory'));
    }
}
