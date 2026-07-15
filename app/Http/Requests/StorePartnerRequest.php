<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StorePartnerRequest extends FormRequest
{
    public function attributes(): array
    {
        return [
            'image' => 'Şəkil',
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
            'image' => ['required', 'image', 'max:1024'],
            'status' => ['required', 'boolean', 'in:0,1'],
        ];
    }
}
