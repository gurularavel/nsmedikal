<?php

namespace Database\Seeders;

use App\Models\Setting;
use App\Services\FileService;

class SettingSeeder extends BaseSeeder
{
    public function run(): void
    {
        FileService::deleteFolder('settings');

        foreach ($this->getData('settings') as $data) {
            if (is_file($sourcePath = public_path() . $data['value'])) {
                $data['value'] = FileService::copyFile('settings', $sourcePath);
            }

            Setting::query()->create($data);
        }
    }
}
