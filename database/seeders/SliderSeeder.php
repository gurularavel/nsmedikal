<?php

namespace Database\Seeders;

use App\Models\Slider;
use App\Services\FileService;

class SliderSeeder extends BaseSeeder
{
    public function run(): void
    {
        FileService::deleteFolder('sliders');
        foreach ($this->getData('sliders') as $data) {
            if (is_file($sourcePath = public_path().$data['image'])) {
                $data['image'] = FileService::copyFile('sliders', $sourcePath);
            }
            Slider::query()->create($data);
        }
    }
}
