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
        'Radic\Foundation\Providers\ArtisanServiceProvider',
        #'Illuminate\Console\ScheduleServiceProvider',
        'Illuminate\Database\MigrationServiceProvider',
        'Illuminate\Database\SeedServiceProvider',
        'Radic\Foundation\Providers\ComposerServiceProvider',
        #'Illuminate\Queue\ConsoleServiceProvider',
    ];
}
