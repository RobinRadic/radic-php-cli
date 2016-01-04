<?php

namespace Radic\Providers;

use Sebwite\Support\ServiceProvider;

/**
 * This is the ConsoleServiceProvider.
 *
 * @author        Sebwite
 * @copyright     Copyright (c) 2015, Sebwite
 * @license       https://tldrlegal.com/license/mit-license MIT
 * @package       Sebwite\Git
 */
class FirstRunServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $app = parent::boot(); // TODO: Change the autogenerated stub
        $c = app()->config;
        $firstRun = $c->get('first_run', true) === true;

        $config = [
            'app.key' => $this->getRandomKey($c->get('app.cipher')),
            'sebwite.git.default' => 'bitbucket',
            'sebwite.git.connections.github.credentials.1' => '',
            'sebwite.git.connections.github.repository' => '',
            'sebwite.git.connections.bitbucket.credentials.key' => '',
            'sebwite.git.connections.bitbucket.credentials.secret' => '',
            'sebwite.git.connections.bitbucket.repository' => ''
        ];

        #$this->app->make('artisan')

        //if($config)
    }


    /**
     * Generate a random key for the application.
     *
     * @param  string  $cipher
     * @return string
     */
    protected function getRandomKey($cipher)
    {
        if ($cipher === 'AES-128-CBC') {
            return Str::random(16);
        }

        return Str::random(32);
    }

}