<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Services\FileService;

class ProductSeeder extends BaseSeeder
{
    public function run(): void
    {
        FileService::deleteFolder('products');

        foreach ($this->getData('products') as $data) {
            if (is_file($sourcePath = public_path().$data['image'])) {
                $data['image'] = FileService::copyFile('products', $sourcePath);
            }
            Product::query()->create($data);
        }
    }
}
