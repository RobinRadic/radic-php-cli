<?php

function start()
{
    $app = new \Radic\App;

    $app->bind('path.base', function(){ return __DIR__ . '/..'; });
    $app->bind('path.app', function(){ return __DIR__ ; });
    $app->bind('path.bin', function(){ return __DIR__ . '/../bin'; });
    $app->bind('path.vendor',function(){ return  __DIR__ . '/../vendor'; });
    $app->bind('path.storage',function(){ return  getenv("HOME") . '/.radic-php-cli'; });
    $app->bind('path.home',function(){ return getenv("HOME"); });

    $app->singleton('events', 'Illuminate\Events\Dispatcher');

    $app['events']->fire('booting');

    $app->singleton('config', function($app){
        return new \Radic\Config;
    });

    $app->bindIf('fs', 'Illuminate\Filesystem\Filesystem');

    $app->singleton('github', function ($app)
    {
        return new Github\Client();
    });


    if(!$app['fs']->exists($app['path.storage'])){
        $app['fs']->makeDirectory($app['path.storage'], 0777, true);
    }

    #var_dump($app);
    define('RADIC_BOOTED', true);
    $app['events']->fire('booted');
    return $app;
}

if ( ! defined('RADIC_BOOTED') )
{
    global $app;
    $app = start();
}

require __DIR__ . '/helpers.php';
