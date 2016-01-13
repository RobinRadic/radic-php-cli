<?php

namespace Radic\Foundation\Providers;

use Illuminate\Support\AggregateServiceProvider;

class ConsoleSupportServiceProvider extends AggregateServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * The provider class names.
     *
     * @var array
     */
    protected $providers = [
        \Radic\Foundation\Providers\ArtisanServiceProvider::class,
        #'Illuminate\Console\ScheduleServiceProvider::class,
        \Radic\Providers\MigrationServiceProvider::class,
        \Radic\Providers\SeedServiceProvider::class,
        \Radic\Foundation\Providers\ComposerServiceProvider::class,
        #'Illuminate\Queue\ConsoleServiceProvider',
    ];
}
