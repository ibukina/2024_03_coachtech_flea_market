<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StaffRequest extends FormRequest
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
            'shop_id'=>['required'],
            'user_id'=>['required'],
        ];
    }

    public function messages(){
        return[
            'shop_id.required'=>'店舗を選択してください',
            'user_id.required'=>'ユーザーを選択してください',
        ];
    }
}
