<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
{
    public function attributes(): array
    {
        return [
            'email' => 'Email',
            'password' => 'Şifrə',
        ];
    }

    public function authorize(): bool
    {
        return auth()->guest();
    }

    public function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required', 'min:5'],
        ];
    }
}
