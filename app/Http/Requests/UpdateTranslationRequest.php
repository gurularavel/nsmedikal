<?php

namespace App\Http\Requests;

class UpdateTranslationRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [];
    }

    protected function notTranslateRules(): array
    {
        return [];
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
