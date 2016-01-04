<?php

use Illuminate\Cache\CacheManager;
use Illuminate\Cache\MemcachedConnector;
use Illuminate\Log\Writer;
use Monolog\Logger as Monolog;
use Sebwite\Support\Path;

function start()
{
    $app = new \Radic\Cli\Foundation\Application;

    $app->bind('path.base', function () {
        return __DIR__ . '/..';

    });
    $app->bind('path.app', function () {
        return __DIR__ ;

    });
    $app->bind('path.bin', function () {
        return __DIR__ . '/../bin';

    });
    $app->bind('path.vendor', function () {
        return  __DIR__ . '/../vendor';

    });
    $app->bind('path.storage', function () {
        return  getenv("HOME") . '/.radic-php-cli';

    });
    $app->bind('path.home', function () {
        return getenv("HOME");

    });


    $app->singleton('events', 'Illuminate\Events\Dispatcher');
    $app['events']->fire('booting');


    $app->instance('log', $log = new Writer(
        new Monolog('local'),
        $app['events']
    ));
    $log->useFiles($app['path.storage'].'/main.log');

    $app->singleton('config', function ($app) {
        return new \Radic\Cli\Config\Repository($app);
    });

    $app->bindIf('files', Sebwite\Support\Filesystem::class);
    $app->bind('fs', 'files');
    if (!$app->fs->exists($app['path.storage'])) {
        $app->fs->makeDirectory($app['path.storage'], 0777, true);
    }

    $cachePath = Path::join($app['path.storage'], 'cache');
    if (! $app->fs->exists($cachePath)) {
        $app->fs->makeDirectory($cachePath);
    }


    $app->singleton('cache.manager', function ($app) {

        return new CacheManager($app);
    });
    $app->singleton('cache', function ($app) {

        return $app['cache.manager']->driver();
    });
    $app->singleton('memcached.connector', function () {

        return new MemcachedConnector;
    });



    $blade = new Radic\Cli\Blade($app, __DIR__ . '/stubs', __DIR__ . '/stubs');
    $app->instance('blade', $blade);

    #var_dump($app);
    define('RADIC_BOOTED', true);
    $app->boot();
    $app['events']->fire('booted');
    $app['log']->info('booted');
    return $app;
}

if (! defined('RADIC_BOOTED')) {
    global $app;
    $app = start();
}

require __DIR__ . DIRECTORY_SEPARATOR . 'helpers.php';
