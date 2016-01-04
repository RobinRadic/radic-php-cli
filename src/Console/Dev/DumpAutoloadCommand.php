<?php
/**
 * Part of the Sebwite PHP packages.
 *
 * License and copyright information bundled with this package in the LICENSE file
 */


namespace Radic\Console\Dev;


use Illuminate\Database\Console\Migrations\BaseCommand;

class DumpAutoloadCommand extends BaseCommand
{
    protected $signature = 'dumpautoload';

    public function handle()
    {
        $debug = env('APP_DEBUG', false);

        if($debug)
        {
            app()->shell('composer dumpautoload');
            $this->call('ide-helper:generate');
            #$this->call('ide-helper:meta');
        }
    }
}
