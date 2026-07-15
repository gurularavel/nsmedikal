<?php

namespace App\Observers;

use App\Models\CompanyCategory;

class CompanyCategoryObserver
{
    /**
     * @param CompanyCategory $companyCategory
     * @return void
     */
    public function saving(CompanyCategory $companyCategory): void
    {
        $locale = config('translatable.locale', 'az');
        $companyCategory->setAttribute('slug', str($companyCategory->{"name:$locale"})->slug());
    }
}
