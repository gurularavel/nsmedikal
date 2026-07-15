<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rules\File;

class StoreSliderRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [
            'image' => 'Şəkil',
            'status' => 'Status',
        ];
    }

    protected function notTranslateRules(): array
    {
        return [
            'image' => ['required', 'image', 'max:1024'],
            'status' => ['required', 'boolean', 'in:0,1'],
        ];
    }

    protected function translateAttributes(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateAttributes["title:$locale"] = 'Başlıq';
            $this->translateAttributes["button_text:$locale"] = 'Düymənin mətni';
            $this->translateAttributes["button_url:$locale"] = 'Düymənin linki';
        }

        return $this->translateAttributes;
    }

    protected function translateRules(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateRules["title:$locale"] = ['required', 'max:255'];
            $this->translateRules["button_text:$locale"] = ['nullable', 'max:255'];
            $this->translateRules["button_url:$locale"] = ['nullable', 'string', 'max:255'];
        }

        return $this->translateRules;
    }
}
