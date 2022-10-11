<?php

namespace ZenCoreSpA\Authentication;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'auth');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }
}
