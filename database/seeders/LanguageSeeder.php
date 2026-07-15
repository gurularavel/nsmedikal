<?php

namespace Database\Seeders;

use App\Models\Language;

class LanguageSeeder extends BaseSeeder
{
    public function run(): void
    {
        foreach ($this->getData('languages') as $data) {
            Language::query()->create($data);
        }
    }
}
