<?php

namespace App\Http\Requests;

class StoreTranslationRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [
            'key' => 'Açar söz',
        ];
    }

    protected function notTranslateRules(): array
    {
        return [
            'key' => ['required', 'max:255', 'unique:translations'],
        ];
    }

    protected function translateAttributes(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateAttributes["value:$locale"] = 'Dəyər';
        }

        return $this->translateAttributes;
    }

    protected function translateRules(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateRules["value:$locale"] = ['required'];
        }

        return $this->translateRules;
    }
}
