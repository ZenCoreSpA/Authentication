<?php

namespace ZenCoreSpA\Authentication\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class PostRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::guest();
    }

    public function rules()
    {
        return [
            'email' => 'required|exists:users,email',
            'password' => 'required|min:8',
        ];
    }
}