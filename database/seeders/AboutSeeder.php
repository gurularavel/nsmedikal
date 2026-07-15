<?php

namespace Database\Seeders;

use App\Models\About;
use App\Services\FileService;

class AboutSeeder extends BaseSeeder
{
    public function run(): void
    {
        FileService::deleteFolder('about');

        foreach ($this->getData('about') as $data) {
            if (is_file($sourcePath = public_path() . $data['image'])) {
                $data['image'] = FileService::copyFile('about', $sourcePath);
            }

            About::query()->create($data);
        }
    }
}
