<?php

namespace App\Http\Requests;

class UpdateProductCategoryRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [
            'main_page_show' => 'Ana səhifədə göstər',
            'products_page_show' => 'Məhsullar səhifəsində göstər',
            'status' => 'Status',
        ];
    }

    protected function notTranslateRules(): array
    {
        return [
            'main_page_show' => ['required', 'boolean', 'in:0,1'],
            'products_page_show' => ['required', 'boolean', 'in:0,1'],
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
