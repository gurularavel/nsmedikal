<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;
use Illuminate\Validation\Rules\File;

class UpdateSettingRequest extends FormRequest
{
    public function attributes(): array
    {
        return [
            'type' => 'Növ',
            'value' => 'Dəyər',
        ];
    }

    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'type' => ['required', 'string', 'in:file,text'],
            'file' => [
                'required_if:type,file',
                'file',
                'max:1024',
                File::types(['pdf', 'jpg', 'png', 'jpeg', 'xlsx', 'xls', 'doc', 'docx'])->max('10mb'),
                'exclude_if:type,text',
            ],
            'value' => ['required_if:type,text', 'string', 'max:500', 'exclude_if:type,file']
        ];
    }
}
