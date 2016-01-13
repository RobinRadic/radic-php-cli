<?php

namespace Radic\Providers;

use Sebwite\Support\Console\ConsoleServiceProvider as BaseConsoleProvider;

class ConsoleServiceProvider extends BaseConsoleProvider
{
    protected $dir = __DIR__;

    protected $finder = true;

    protected $namespace = 'Radic\\Console';

    protected $prefix = 'radic.commands.';

    protected $reject = [ 'Command' ];

    protected $exclude = [ ];

}
