<?php

namespace App\Http\Requests;

class UpdateCompanyRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [
            'company_category_id' => 'Kateqoriya',
            'name' => 'Ad',
            'image' => 'Şəkil',
            'status' => 'Status',
        ];
    }

    protected function notTranslateRules(): array
    {
        return [
            'company_category_id' => ['required', 'exists:company_categories,id'],
            'name' => ['required', 'string', 'max:255'],
            'image' => ['nullable', 'image', 'max:1024'],
            'status' => ['required', 'boolean', 'in:0,1'],
        ];
    }

    protected function translateAttributes(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateAttributes["description:$locale"] = 'Təsvir';
            $this->translateAttributes["products:$locale"] = 'Məhsullar';
        }

        return $this->translateAttributes;
    }

    protected function translateRules(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateRules["description:$locale"] = ['nullable', 'max:500'];
            $this->translateRules["products:$locale"] = ['nullable', 'max:500'];
        }

        return $this->translateRules;
    }
}
