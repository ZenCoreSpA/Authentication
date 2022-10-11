<?php

namespace ZenCoreSpA\Authentication\Http\Requests\Login;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;

class GetRequest extends FormRequest
{
    public function authorize()
    {
        return Auth::guest();
    }

    public function rules()
    {
        return [];
    }
}