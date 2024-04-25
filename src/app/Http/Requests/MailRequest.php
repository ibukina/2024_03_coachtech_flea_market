<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MailRequest extends FormRequest
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
            'title'=>['required', 'string', 'max:20'],
            'email'=>['required', 'email', 'string', 'max:191'],
            'content'=>['required',],
        ];
    }

    public function messages(){
        return [
            'title.required'=>'タイトルを入力してください',
            'title.string'=>'タイトルを文字列で入力してください',
            'title.max'=>'タイトルを20文字以下で入力してください',
            'email.required'=>'メールアドレスを入力してください',
            'email.email'=>'メールアドレスをtest@example.comの形式で入力してください',
            'email.string'=>'メールアドレスを文字列で入力してください',
            'email.max'=>'メールアドレスを191文字以下で入力してください',
            'content.required'=>'送信内容を入力してください',
        ];
    }
}
