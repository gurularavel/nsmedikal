<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateLanguageRequest extends FormRequest
{
    public function attributes(): array
    {
        return [
            'name' => 'Ad',
            'locale' => 'Kod',
            'image' => 'Şəkil',
            'default' => 'Əsas',
            'status' => 'Status',
        ];
    }

    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'max:255'],
            'locale' => ['required', 'alpha', 'size:2', 'lowercase', 'unique:languages,locale,' . $this->language->id],
            'image' => ['nullable', 'image', 'max:1024'],
            'default' => ['required', 'boolean', 'in:0,1'],
            'status' => ['required', 'boolean', 'in:0,1'],
        ];
    }
}
