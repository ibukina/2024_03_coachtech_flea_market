<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ItemRequest extends FormRequest
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
            'name'=>['required',],
            'price'=>['required', 'integer'],
            'description'=>['required', 'min:20'],
            'img_url'=>['required',],
            'category_id'=>['required',],
            'condition_id'=>['required',],
        ];
    }

    public function messages(){
        return [
            'name.required'=>'商品名を入力してください',
            'price.required'=>'商品価格を入力してください',
            'price.integer'=>'商品価格を数字で入力してください',
            'description.required'=>'商品の説明を入力してください',
            'description.min'=>'商品の説明を20文字以上入力してください',
            'img_url.required'=>'商品の画像を選択してください',
            'category_id.required'=>'カテゴリーを選択してください',
            'condition_id.required'=>'商品の状態を選択してください',
        ];
    }
}
