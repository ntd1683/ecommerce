<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class StoreProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return auth()->user()->level >= 1;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'name' => ['required', 'string'],
            'sku' => ['required', 'string'],
            'product_category_id' => ['required', 'integer'],
            'price' => ['required', 'digits_between:3,19'],
            'product_discount_id' => ['nullable', 'integer'],
            'pin' => ['nullable', Rule::in([1,0])],
            'unit' => ['nullable', 'string'],
            'quantity' => ['required', 'integer'],
            'description' => ['nullable', 'string'],
            'images' => 'nullable',
            'images.*' => 'mimes:jpeg,jpg,png,gif,csv,txt,pdf|max:2048',
        ];
    }
}
