<?php

namespace ZenCoreSpA\Authentication\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use ZenCoreSpA\Authentication\Http\Requests\LogoutRequest;

class LogoutController extends Controller
{
    public function __invoke(LogoutRequest $request): RedirectResponse
    {
        Auth::logout();

        return response()
            ->redirectToRoute('auth.login')
            ->with('message', __('Unauthenticated'));
    }
}