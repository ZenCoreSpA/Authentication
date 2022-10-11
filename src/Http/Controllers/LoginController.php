<?php

namespace ZenCoreSpA\Authentication\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use ZenCoreSpA\Authentication\Http\Requests\Login\GetRequest;
use ZenCoreSpA\Authentication\Http\Requests\Login\PostRequest;

class LoginController extends Controller
{
    public function get(GetRequest $request): View
    {
        return view('auth::forms.login');
    }

    public function post(PostRequest $request): RedirectResponse
    {
        if (Auth::attempt([
            'email' => $request->input('email'),
            'password' => $request->input('password'),
        ])) {
            return response()
                ->redirectToRoute('auth.dashboard')
                ->with('message', __('Authenticated'));
        }
        return response()
            ->redirectToRoute('auth.login')
            ->with('message', __('Unauthenticated'));
    }
}