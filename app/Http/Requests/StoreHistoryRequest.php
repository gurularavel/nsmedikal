<?php

namespace App\Http\Requests;

class StoreHistoryRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [
            'year' => 'İl',
            'status' => 'Status',
        ];
    }

    protected function notTranslateRules(): array
    {
        return [
            'year' => ['required', 'integer', 'between:1901,2155'],
            'status' => ['required', 'boolean', 'in:0,1'],
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
            $this->translateRules["description:$locale"] = ['required', 'max:255'];
        }

        return $this->translateRules;
    }
}
