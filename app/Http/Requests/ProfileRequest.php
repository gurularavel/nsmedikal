<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProfileRequest extends FormRequest
{
    public function attributes(): array
    {
        return [
            'name' => 'Ad',
            'surname' => 'Soyad',
            'email' => 'Email',
            'password' => 'Şifrə',
        ];
    }

    public function authorize(): bool
    {
        return auth()->check();
    }

    public function rules(): array
    {
        return [
            'name' => ['required', 'alpha', 'max:255'],
            'surname' => ['required', 'alpha', 'max:255'],
            'email' => ['required', 'email', 'max:255', 'unique:users,email,' . auth()->id()],
            'password' => ['nullable', 'min:5'],
        ];
    }
}
