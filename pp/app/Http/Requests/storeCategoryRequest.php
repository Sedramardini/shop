<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class storeCategoryRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'name'=>'required',
            
            'slug'=>'required',
            'description'=>'required',
           
            'image'=>'required|image',
            'meta_title'=>'required',
           
            'meta_description'=>'required',
            'meta_keywords'=>'required'
        ];
    }
}
