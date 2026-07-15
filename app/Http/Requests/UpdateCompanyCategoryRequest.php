<?php

namespace App\Http\Requests;

class UpdateCompanyCategoryRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [
            'parent_id' => 'Aid olduğu kateqoriya',
            'status' => 'Status',
        ];
    }

    protected function notTranslateRules(): array
    {
        return [
            'parent_id' => ['nullable', 'exists:company_categories,id'],
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
