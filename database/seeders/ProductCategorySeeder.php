<?php

namespace Database\Seeders;

use App\Models\ProductCategory;

class ProductCategorySeeder extends BaseSeeder
{
    public function run(): void
    {
        foreach ($this->getData('product_categories') as $data) {
            ProductCategory::query()->create($data);
        }
    }
}
