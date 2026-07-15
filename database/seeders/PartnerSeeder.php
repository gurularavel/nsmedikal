<?php

namespace Database\Seeders;

use App\Models\Partner;
use App\Services\FileService;

class PartnerSeeder extends BaseSeeder
{
    public function run(): void
    {
        FileService::deleteFolder('partners');

        foreach ($this->getData('partners') as $data) {
            if (is_file($sourcePath = public_path() . $data['image'])) {
                $data['image'] = FileService::copyFile('partners', $sourcePath);
            }

            Partner::query()->create($data);
        }
    }
}
