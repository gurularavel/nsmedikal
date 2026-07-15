<?php

declare(strict_types=1);

namespace App\Composers;

use App\Models\CompanyCategory;
use Illuminate\View\View;

class CompanyCategoryComposer
{
    public function compose(View $view): void
    {
        $companyCategories = CompanyCategory::query()
            ->whereNull('parent_id')
            ->where('status', CompanyCategory::IS_ACTIVE)
            ->get(['id', 'slug']);

        $view->with('companyCategories', $companyCategories);
    }
}
