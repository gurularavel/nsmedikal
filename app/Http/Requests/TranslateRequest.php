<?php

namespace App\Http\Requests;

use App\Models\Language;
use Illuminate\Foundation\Http\FormRequest;

abstract class TranslateRequest extends FormRequest
{
    protected array $translateAttributes = [];

    protected array $translateRules = [];

    abstract protected function notTranslateAttributes(): array;

    abstract protected function notTranslateRules(): array;

    abstract protected function translateAttributes(): array;

    abstract protected function translateRules(): array;

    public function attributes(): array
    {
        return array_merge($this->notTranslateAttributes(), $this->translateAttributes());
    }

    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return array_merge($this->notTranslateRules(), $this->translateRules());
    }

    protected function getLocales(): array
    {
        $language = Language::query()->where(['status' => 1]);

        if ($language->exists()) {
            return $language->pluck('locale')->toArray();
        }

        return config('translatable.locales', ['az', 'en', 'ru']);
    }
}
