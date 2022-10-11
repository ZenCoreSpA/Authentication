<?php

namespace ZenCoreSpA\Authentication\Http\Controllers;

use Illuminate\Contracts\View\View;
use ZenCoreSpA\Authentication\Http\Requests\DashboardRequest;

class DashboardController extends Controller
{
    public function __invoke(DashboardRequest $request): View
    {
        return view('auth::dashboard');
    }
}