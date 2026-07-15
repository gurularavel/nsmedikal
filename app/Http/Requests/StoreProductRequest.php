<?php

namespace App\Http\Requests;

class StoreProductRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [
            'product_category_id' => 'Məhsul kateqoriyası',
            'image' => 'Şəkil',
            'status' => 'Status',
        ];
    }

    protected function notTranslateRules(): array
    {
        return [
            'product_category_id' => ['required', 'integer', 'exists:product_categories,id'],
            'image' => ['required', 'image', 'max:5024'],
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
