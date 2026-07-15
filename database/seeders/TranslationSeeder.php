<?php

namespace Database\Seeders;

use App\Models\Translation;
use App\Traits\TranslationTrait;

class TranslationSeeder extends BaseSeeder
{
    use TranslationTrait;

    public function run(): void
    {
        foreach ($this->getData('translations') as $data) {
            Translation::query()->create($data);
        }
        $this->writeTranslationsToFolder();
    }
}
