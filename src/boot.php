<?php

use Illuminate\Cache\CacheManager;
use Illuminate\Cache\MemcachedConnector;
use Illuminate\Log\Writer;

use Monolog\Logger as Monolog;
use Radic\Stub;

function start()
{
    $app = new \Radic\App;

    $app->bind('path.base', function(){ return __DIR__ . '/..'; });
    $app->bind('path.app', function(){ return __DIR__ ; });
    $app->bind('path.bin', function(){ return __DIR__ . '/../bin'; });
    $app->bind('path.vendor',function(){ return  __DIR__ . '/../vendor'; });
    $app->bind('path.storage',function(){ return  getenv("HOME") . '/.radic-php-cli'; });
    $app->bind('path.home',function(){ return getenv("HOME"); });

    //
    /* EVENTS */
    //
    $app->singleton('events', 'Illuminate\Events\Dispatcher');
    $app['events']->fire('booting');

    //
    /* LOGGING */
    //
    $app->instance('log', $log = new Writer(
        new Monolog('local'), $app['events'])
    );
    $log->useFiles($app['path.storage'].'/main.log');

    //
    /* CONFIG */
    //
    $app->singleton('config', function($app){
        return new \Radic\Config;
    });

    //
    /* FILESYSTEM */
    //
    $app->bindIf('files', 'Radic\Filesystem');
    $app->bind('fs', 'files');
    if(!$app['fs']->exists($app['path.storage'])){
        $app['fs']->makeDirectory($app['path.storage'], 0777, true);
    }

    //
    /* CACHE */
    //
    $app->singleton('cache.manager', function($app)
    {
        return new CacheManager($app);
    });
    $app->singleton('cache', function($app)
    {
        return $app['cache.manager']->driver();
    });
    $app->singleton('memcached.connector', function()
    {
        return new MemcachedConnector;
    });

    //
    /* STUBS */
    //
    $app->singleton('stub', function($app)
    {
        return new Stub();
    });


    //
    /* GITHUB */
    //
    $app->singleton('github', function ($app)
    {
        $client = new \Github\Client(
            new \Github\HttpClient\CachedHttpClient(array('cache_dir' => $app['path.storage'] . '/tmp/github-api-cache'))
        );

        $client->authenticate($app['config']->get('github.token'), \Github\Client::AUTH_URL_TOKEN);

        return $client;
    });



    #var_dump($app);
    define('RADIC_BOOTED', true);
    $app['events']->fire('booted');
    $app['log']->info('booted');
    return $app;
}

if ( ! defined('RADIC_BOOTED') )
{
    global $app;
    $app = start();
}

require __DIR__ . '/helpers.php';
