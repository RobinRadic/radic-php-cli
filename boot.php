<?php

function start()
{
    $app = new \Radic\App;

    $app->bind('path.base', function(){ return __DIR__; });
    $app->bind('path.app', function(){ return __DIR__ . '/src'; });
    $app->bind('path.bin', function(){ return __DIR__ . '/bin'; });
    $app->bind('path.vendor',function(){ return  __DIR__ . '/bin'; });
    $app->bind('path.home',function(){ return getenv("HOME"); });

    $app->singleton('events', 'Illuminate\Events\Dispatcher');

    $app['events']->fire('booting');

    $app->singleton('config', function($app){
        return new \Radic\Config;
    });

    $app->bindIf('fs', 'Illuminate\Filesystem\Filesystem');

    $app->bindShared('files', function ($app)
    {
        return new League\Flysystem\Filesystem(
            new League\Flysystem\Adapter\Local($app['path.base'])
        );
    });

    $app->singleton('github', function ($app)
    {
        return new Github\Client();
    });

    if(!$app['files']->has('config.php')){
        $app['files']->put('config.php', "<?php \n return " . var_export(array('configured' => false), true) . ';');
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


if ( ! function_exists('radic') )
{
    /**
     * @return \Radic\App;
     */
    function radic($var = null)
    {
        global $app;
        $radic = $app;
        return $var === null ? $radic : $radic->make($var);
    }
}
