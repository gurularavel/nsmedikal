<?php

namespace App\Http\Requests;

class UpdateAboutRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [
            'image' => 'Şəkil',
        ];
    }

    protected function notTranslateRules(): array
    {
        return [
            'image' => ['nullable', 'image', 'max:1024'],
        ];
    }

    protected function translateAttributes(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateAttributes["description:$locale"] = 'Açıqlama';
        }

        return $this->translateAttributes;
    }

    protected function translateRules(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateRules["description:$locale"] = ['required'];
        }

        return $this->translateRules;
    }
}
