<?php

namespace App\Observers;

use App\Models\ProductCategory;

class ProductCategoryObserver
{
    /**
     * @param ProductCategory $productCategory
     * @return void
     */
    public function saving(ProductCategory $productCategory): void
    {
        $locale = config('translatable.locale', 'az');
        $productCategory->setAttribute('slug', str($productCategory->{"name:$locale"})->slug());
    }
}
