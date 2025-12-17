<?php

namespace App\Http\Requests\Product;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{

    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
        'name'=>['required','string','max:100'],
        'description'=>['required','string'],
        'usage'=>['required','string'],
        'active'=>['required','boolean'],
        'price'=>['required','numeric','min:0'],
        'file'=>['required','file','mimes:zip,rar','max:102400'],
        ];
    }
}
