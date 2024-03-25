<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class RegisterRequest extends FormRequest
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
            'name'=>['required', 'string', 'max:191'],
            'email'=>['required', 'email', 'unique:users,email', 'string', 'max:191'],
            'password'=>['required', 'min:8', 'max:191'],
        ];
    }

    public function messages(){
        return[
            'name.required'=>'ユーザー名を入力してください',
            'name.string'=>'ユーザー名を文字列で入力してください',
            'name.max'=>'ユーザー名を191文字以下で入力してください',
            'email.required'=>'メールアドレスを入力してください',
            'email.email'=>'メールアドレスをtest@example.comの形式で入力してください',
            'email.unique'=>'他のユーザーと重複しないメールアドレスを入力してください',
            'email.string'=>'メールアドレスを文字列で入力してください',
            'email.max'=>'メールアドレスを191文字以下で入力してください',
            'password.required'=>'パスワードを入力してください',
            'password.min'=>'パスワードを8文字以上で入力してください',
            'password.max'=>'パスワードを191文字以下で入力してください',
        ];
    }
}
