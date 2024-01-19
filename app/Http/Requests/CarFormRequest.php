<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CarFormRequest extends FormRequest
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
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'brand'=>['required','min:3'],
            'model'=>['required','min:3'],
            'fuel'=>['required'],
            'transmission'=>['required'],
            'description'=>['required','min:8'],
            'places'=>['required','integer','min:2','max:10'],
            'color'=>['required','min:3'],
            'price'=>['required','integer','min:10'],
            'available'=>['required','boolean'],
            'image1_path'=>['image','max:2000','mimes:png,jpg,jpeg'],
            'image2_path'=>['image','max:2000','mimes:png,jpg,jpeg'],
        ];
    }
}
