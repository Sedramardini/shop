<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        return [
            'category_id' => 'required|exists:App\Models\Category,id',
            'name' => 'required',      
            'slug' => 'required',
            'short_description' => 'required',
            'description' => 'required',
         
            'price' => 'required',
            'selling_price' => 'required',
            'image' => 'required|image',
            'qty' => 'required',
            'tax' => 'required',
            'meta_title' => 'required',
            'meta_keywords' => 'required',
            'meta_description' => 'required',
        ];
           
    }
}
