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
            'first_name' => ['required', 'string', 'max:255'],
            'last_name' => ['required', 'string', 'max:255'],
            'gender' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'tel-1' => ['required', 'numeric', 'max:5'],
            'tel-2' => ['required', 'numeric', 'max:5'],
            'tel-3' => ['required', 'numeric', 'max:5'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['required', 'string', 'max:255'],
            'content' => ['required', 'string', 'max:255'],
            'detail' => ['required', 'text', 'max:120'],
        ];
    }

    public function messages()
    {
        return [
            'first_name.required' => '姓を入力してください',
            'first_name.string' => '姓を文字列で入力してください',
            'first_name.max' => '姓を255文字以下で入力してください',
            'last_name.required' => '名を入力してください',
            'last_name.string' => '名を文字列で入力してください',
            'last_name.max' => '名を255文字以下で入力してください',
            'gender.required' => '性別を選択してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => '有効なメールアドレス形式を入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel-1.required' => '電話番号を入力してください',
            'tel-1.numeric' => '電話番号を数値で入力してください',
            'tel-1.max' => '電話番号を5桁までの数字で入力してください',
            'tel-2.required' => '電話番号を入力してください',
            'tel-2.numeric' => '電話番号を数値で入力してください',
            'tel-2.max' => '電話番号を5桁までの数字で入力してください',
            'tel-3.required' => '電話番号を入力してください',
            'tel-3.numeric' => '電話番号を数値で入力してください',
            'tel-3.max' => '電話番号を桁までの数字で入力してください',
            'address.required' => '住所を入力してください',
            'address.string' => '住所を文字列で入力してください',
            'address.max' => '住所を255文字以下で入力してください',
            'content.required' => '問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.string' => 'お問い合わせ内容を文字列で入力してください',
            'detail.max' => 'お問い合わせ内容を120文字以下で入力してください',
        ];
    }
}
