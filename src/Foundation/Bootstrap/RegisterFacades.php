<?php

namespace Radic\Foundation\Bootstrap;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\Facades\Facade;
use Radic\Foundation\AliasLoader;

class RegisterFacades
{
    /**
     * Bootstrap the given application.
     *
     * @param  \Illuminate\Contracts\Foundation\Application  $app
     * @return void
     */
    public function bootstrap(Application $app)
    {
        Facade::clearResolvedInstances();

        Facade::setFacadeApplication($app);

        AliasLoader::getInstance($app->make('config')->get('app.aliases'))->register();
    }
}
