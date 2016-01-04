<?php

namespace Radic\Cli\Foundation\Providers;

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
        'Radic\Cli\Foundation\Providers\ArtisanServiceProvider',
        #'Illuminate\Console\ScheduleServiceProvider',
        'Illuminate\Database\MigrationServiceProvider',
        'Illuminate\Database\SeedServiceProvider',
        'Radic\Cli\Foundation\Providers\ComposerServiceProvider',
        #'Illuminate\Queue\ConsoleServiceProvider',
    ];
}
