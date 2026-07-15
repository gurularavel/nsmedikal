<?php

namespace App\Http\Requests;

class StoreCounterRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [
            'amount' => 'Miqdar',
            'status' => 'Status',
        ];
    }

    protected function notTranslateRules(): array
    {
        return [
            'amount' => ['required', 'integer', 'gt:0'],
            'status' => ['required', 'boolean', 'in:0,1'],
        ];
    }

    protected function translateAttributes(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateAttributes["name:$locale"] = 'Ad';
        }

        return $this->translateAttributes;
    }

    protected function translateRules(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateRules["name:$locale"] = ['required', 'max:255'];
        }

        return $this->translateRules;
    }
}
