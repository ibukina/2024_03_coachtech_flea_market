<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AddressRequest extends FormRequest
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
            'postcode'=>['required', 'integer'],
            'address'=>['required',],
        ];
    }

    public function messages(){
        return[
            'postcode.required'=>'郵便番号を入力してください',
            'postcode.integer'=>'郵便番号を数字で入力してください',
            'address.required'=>'住所を入力してください',
        ];
    }
}
