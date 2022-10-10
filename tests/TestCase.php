<?php

namespace ZenCoreSpA\Authentication\Tests;

use Illuminate\Foundation\Application;
use Illuminate\Routing\Router;
use ZenCoreSpA\Authentication\ServiceProvider;

class TestCase extends \Orchestra\Testbench\TestCase
{
    /**
     * Get package providers.
     *
     * @param  Application  $app
     *
     * @return array
     */
    protected function getPackageProviders($app)
    {
        return [
            ServiceProvider::class
        ];
    }

    /**
     * Get package aliases.
     *
     * @param Application $app
     *
     * @return array
     */
    protected function getPackageAliases($app)
    {
        return [
            //
        ];
    }

    /**
     * Define environment setup.
     *
     * @param Application $app
     *
     * @return void
     */
    protected function getEnvironmentSetUp($app)
    {
        /** @var Router $router */
        $router = $app['router'];
    }
}