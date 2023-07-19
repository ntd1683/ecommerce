<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreAddressRequest extends FormRequest
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
            'address_1' => ['required', 'string'],
            'address_2' => ['nullable', 'string'],
            'district' => ['nullable', 'string'],
            'district_id' => ['nullable', 'string'],
            'province' => ['nullable', 'string'],
            'province_id' => ['nullable', 'string'],
            'ward' => ['nullable', 'string'],
            'ward_id' => ['nullable', 'string'],
        ];
    }
}
