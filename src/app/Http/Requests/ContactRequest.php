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
            'first-name' => ['required', 'string' ],
            'later-name' => ['required', 'string' ],
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255'],
            'password' => ['required', 'string', 'max:255'],
            'gender' => ['required'],
            'address' => ['required', 'string', 'max:255'],
            'building' => ['string', 'max:255'],
            'category_id' => ['required'],
            'tel' => ['required', 'numeric', 'max:11'],
            'phone_part1' => ['required', 'numeric', 'max:5'],
            'phone_part2' => ['required', 'numeric', 'max:5'],
            'phone_part3' => ['required', 'numeric', 'max:5'],
        ];
    }

    public function messages()
    {
        return[
            'first-name.required' => '姓を入力してください',
            'first-name.string' => '姓を文字列で入力してください',
            'later-name.required' => '名を入力してください',
            'later-name.string' => '名を文字列で入力してください',
            'name.required' => '名前を入力してください',
            'name.string' => '名前を文字列で入力してください',
            'name.max' => '名前を255文字以下で入力してください',
            'email.required' => 'メールアドレスを入力してください',
            'email.string' => 'メールアドレスを文字列で入力してください',
            'email.email' => 'メールアドレスは「ユーザー名＠ドメイン」形式で入力してください',
            'email.max' => 'メールアドレスを255文字以下で入力してください',
            'tel.required' => '電話番号を入力してください',
            'tel.numeric' => '電話番号を数値で入力してください',
            'tel.digits_between' => '電話番号は5桁まで数字で入力してください',
            'password.required' => 'パスワードを入力してください',
            'password.string' => 'パスワードを文字列で入力してください',
            'password.max' => 'パスワードを255文字以下で入力してください',
            'gender.required' => '性別を選択してください',
            'category_id.required' => 'お問い合わせの種類を選択してください',
            'detail.required' => 'お問い合わせ内容を入力してください',
            'detail.string' => 'お問い合わせ内容を文字列で入力してください',
            'detail.max' => 'お問い合わせ内容を120文字以下で入力してください'
        ];
    }
}
