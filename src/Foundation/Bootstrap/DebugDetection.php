<?php
/**
 * Part of the Sebwite PHP Packages.
 *
 * License and copyright information bundled with this package in the LICENSE file
 */
namespace Radic\Cli\Foundation\Bootstrap;

use Illuminate\Contracts\Foundation\Application;

/**
 * This is the DevDistDetection.
 *
 * @package        Sebwite\Platform
 * @author         Sebwite
 * @copyright      Copyright (c) 2015, Sebwite
 */
class DebugDetection
{

    /**
     * Bootstrap the given application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {
        if ($app['config']['app.debug'] === true || env('APP_DEBUG', false) === true ) {
            $app['config']['app.providers'] =  array_merge(
                $app['config']['app.providers'],
                $app['config']['app.providers-dev']
            );
            $app->make('Illuminate\Contracts\Http\Kernel')->prependMiddleware(
                #\Clockwork\Support\Laravel\ClockworkMiddleware::class
            );
        }
    }
}
