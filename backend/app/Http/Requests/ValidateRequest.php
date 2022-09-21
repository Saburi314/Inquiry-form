<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ValidateRequest extends FormRequest
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
            'name' => 'required',
            'email' => 'required|email',
            'tel' => 'nullable|regex:/^[0-9]{3}-[0-9]{4}-[0-9]{4}$/',
            'gender'  => 'required',
            'image'  => 'nullable',
            'context'  => 'required',
        ];
    }

    public function messages()
    {
        return [
            'name.required' => '名前は必ず入力してください',
            'email.required' => 'メールアドレスは必ず入力してください',
            'email.email' => '正しい形式でメールアドレスを入力してください',
            'tel.regex' => '電話番号はXXX-XXXX-XXXXの形式で入力してください',
            'gender.required' => '性別は必ず選択してください',
            'context.required' => 'お問い合わせ内容は必ず入力してください'
        ];
    }

}
