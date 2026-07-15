<?php

namespace App\Http\Requests;

class StoreNewsArticleRequest extends TranslateRequest
{
    protected function notTranslateAttributes(): array
    {
        return [
            'image' => 'Şəkil',
            'published_date' => 'Dərc tarixi',
            'status' => 'Status',
        ];
    }

    protected function notTranslateRules(): array
    {
        return [
            'image' => ['required', 'image', 'max:1024'],
            'published_date' => ['required', 'date_format:Y-m-d'],
            'status' => ['required', 'boolean', 'in:0,1'],
        ];
    }

    protected function translateAttributes(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateAttributes["title:$locale"] = 'Başlıq';
            $this->translateAttributes["description:$locale"] = 'Qısa açıqlama';
            $this->translateAttributes["content:$locale"] = 'Mətn';
            $this->translateAttributes["meta_description:$locale"] = 'SEO üçün açıqlama';
            $this->translateAttributes["meta_keywords:$locale"] = 'SEO üçün açar sözlər';
        }

        return $this->translateAttributes;
    }

    protected function translateRules(): array
    {
        foreach ($this->getLocales() as $locale) {
            $this->translateRules["title:$locale"] = ['required'];
            $this->translateRules["description:$locale"] = ['nullable'];
            $this->translateRules["content:$locale"] = ['required'];
            $this->translateRules["meta_description:$locale"] = ['nullable', 'string'];
            $this->translateRules["meta_keywords:$locale"] = ['nullable', 'string'];
        }

        return $this->translateRules;
    }
}
