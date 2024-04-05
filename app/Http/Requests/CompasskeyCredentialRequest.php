<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CompasskeyCredentialRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'url' => ['required', 'string', 'max:255'],
            'token' => ['required', 'string', 'max:255'],
        ];
    }
}
