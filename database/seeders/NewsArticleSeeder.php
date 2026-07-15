<?php

namespace Database\Seeders;

use App\Models\NewsArticle;
use App\Services\FileService;

class NewsArticleSeeder extends BaseSeeder
{
    public function run(): void
    {
        FileService::deleteFolder('news');
        foreach ($this->getData('news') as $data) {
            if (is_file($sourcePath = public_path() . $data['image'])) {
                $data['image'] = FileService::copyFile('news', $sourcePath);
            }

            NewsArticle::query()->forceCreateQuietly($data);
        }
    }
}
