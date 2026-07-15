<?php

namespace Database\Seeders;

use App\Models\Company;
use App\Services\FileService;

class CompanySeeder extends BaseSeeder
{
    public function run(): void
    {
        FileService::deleteFolder('companies');

        foreach ($this->getData('companies') as $data) {
            if (is_file($sourcePath = public_path().$data['image'])) {
                $data['image'] = FileService::copyFile('companies', $sourcePath);
            }
            Company::query()->create($data);
        }
    }
}
