<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ContactRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'last_name' => 'required',
            'first_name' => 'required',
            'gender' => 'required',
            'email' => 'required|email',
            'zip11' => 'required|regex:/^\d{3}-\d{4}$/',
            'addr11' => 'required',
            'option' => 'required|max:120',
        ];
    }

    public function messages()
    {
        return [
            'last_name.required' => '苗字を入力してください',
            'first_name.required' => '名前を入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.email' => 'メールアドレスの形式で入力してください',
            'zip11.required' => '郵便番号を入力してください',
            'zip11.regex' => 'ハイフンを含む郵便番号形式で入力してください',
            'addr11.required' => '住所を入力してください',
            'option.required' => 'ご意見を入力してください',
            'option.max' => '120文字以内で入力してください',
        ];
    }

}
