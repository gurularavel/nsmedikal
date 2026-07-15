<?php

namespace Database\Seeders;

use App\Models\CompanyCategory;

class CompanyCategorySeeder extends BaseSeeder
{
    public function run(): void
    {
        foreach ($this->getData('company_categories') as $data) {
            CompanyCategory::query()->create($data);
        }
    }
}
