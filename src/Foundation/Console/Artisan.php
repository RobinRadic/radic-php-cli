<?php

namespace Radic\Foundation\Console;

use Illuminate\Console\Application;
use Illuminate\Contracts\Container\Container;
use Illuminate\Contracts\Events\Dispatcher;

class Artisan extends Application
{
    public function __construct(Container $laravel, Dispatcher $events, $version)
    {
        parent::__construct($laravel, $events, $version);
        $this->setName(app()->getName());
    }
}
