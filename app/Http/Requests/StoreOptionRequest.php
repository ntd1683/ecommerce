<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreOptionRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->level == 2;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'site_name' => ['nullable', 'string'],
            'primary_color' => ['nullable', 'string'],
            'secondary_color' => ['nullable', 'string'],
            'site_logo' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
            'site_favicon' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
        ];
    }
}
