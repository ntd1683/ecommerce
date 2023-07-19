<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreUserPaymentRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->check();
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name_payment' => ['required', 'string'],
            'provide' => ['required', 'string'],
            'type' => ['required', Rule::in([0,1])],
            'qr' => ['mimes:jpeg,jpg,png,gif', 'nullable'],
        ];
    }
}
