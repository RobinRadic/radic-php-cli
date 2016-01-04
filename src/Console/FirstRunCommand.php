<?php
/**
 * Part of the Sebwite PHP packages.
 *
 * License and copyright information bundled with this package in the LICENSE file
 */


namespace Radic\Console;


class FirstRunCommand extends Command
{
    protected $signature = 'first-run';

    public function handle()
    {
        $this->ask('asdf');
    }
}
