<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class LoginRequest extends FormRequest
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
            'username' => 'required|string|max:100',
            'password' => 'required|alpha_dash|between:6,20',
        ];
    }

    public function messages ()
    {
        return [
            'username.required' => '名称不能为空',
            'username.max' => '你他妈干啥？',
            'username.string' => '名称格式不正确',
            'password.alpha_dash' => '密码只能是字母数字下划线组合',
            'password.between' => '密码长度在6到20之间',
            'password.required' => '密码长度在6到20之间',
        ]; 
    } 
}