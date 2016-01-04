<?php

namespace Radic\Foundation\Providers;

use Illuminate\Support\ServiceProvider;
use Radic\Foundation\Console\ClearCompiledCommand;

class ArtisanServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = true;

    /**
     * The commands to be registered.
     *
     * @var array
     */
    protected $commands = [
        'ClearCompiled' => 'command.clear-compiled'
    ];

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerCommands($this->commands);
    }

    /**
     * Register the given commands.
     *
     * @param  array $commands
     *
     * @return void
     */
    protected function registerCommands(array $commands)
    {
        foreach ( array_keys($commands) as $command )
        {
            $method = "register{$command}Command";

            call_user_func_array([ $this, $method ], [ ]);
        }

        $this->commands(array_values($commands));
    }

    /**
     * Register the command.
     *
     * @return void
     */
    protected function registerClearCompiledCommand()
    {
        $this->app->singleton('command.clear-compiled', function ()
        {
            return new ClearCompiledCommand;
        });
    }


    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        if ( $this->app->environment('production') )
        {
            return array_values($this->commands);
        }
        else
        {
            return array_merge(array_values($this->commands), array_values($this->devCommands));
        }
    }
}
