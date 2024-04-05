<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class GuestyCredentialRequest extends FormRequest
{
    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\Rule|array|string>
     */
    public function rules(): array
    {
        return [
            'client_id' => ['required', 'string', 'max:255'],
            'client_secret' => ['required', 'string', 'max:255'],
            'account_id' => ['required', 'string', 'max:255'],
        ];
    }
}
