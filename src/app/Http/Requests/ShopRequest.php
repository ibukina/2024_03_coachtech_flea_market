<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ShopRequest extends FormRequest
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
            'name'=>['required', 'string', 'max:100',],
            'area_id'=>['required',],
            'genre_id'=>['required',],
            'summary'=>['required', 'min:20', 'max:400'],
            'store_image'=>['required', 'file', 'image',],
        ];
    }

    public function messages(){
        return [
            'name.required'=>'店舗名を入力してください',
            'area_id.required'=>'エリアを選択してください',
            'genre_id.required'=>'ジャンルを選択してください',
            'summary.required'=>'店舗の概要を入力してください',
            'summary.min'=>'店舗の概要を20文字以上入力してください',
            'summary.max'=>'店舗の概要を400文字以下で入力してください',
            'store_image.required'=>'商品の画像を選択してください',
            'store_image.file'=>'画像のアップロードが出来ていません',
            'store_image.image'=>'画像ファイルを選択してください',
        ];
    }
}
