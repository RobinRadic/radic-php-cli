<?php

namespace Radic\Providers;

use Sebwite\Support\ConsoleServiceProvider as BaseConsoleProvider;
use Sebwite\Support\Path;
use Sebwite\Support\Str;

/**
* This is the ConsoleServiceProvider.
*
* @author        Sebwite
* @copyright  Copyright (c) 2015, Sebwite
* @license      https://tldrlegal.com/license/mit-license MIT
* @package      Sebwite\Git
*/
class ConsoleServiceProvider extends BaseConsoleProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * @var  string
     */
    protected $namespace = 'Radic\\Console';

    /**
     * @var  string
     */
    protected $prefix = 'radic.commands.';

    /**
     * @var  array
     */
    protected $commands = [
     //   'config'   => 'Config\\Config'
    ];

    public function __construct(\Illuminate\Contracts\Foundation\Application $app)
    {
        parent::__construct($app);

        $sep = DIRECTORY_SEPARATOR;
        $dir = __DIR__;

        $finder = \Symfony\Component\Finder\Finder::create();

        $consolePath = "{$dir}{$sep}..{$sep}Console";

        $files = $finder->in($consolePath)->contains('Command')->files();

        foreach ( $files as $file )
        {
            if ( !str_contains($file, '.php') or $file === 'Command.php' )
            {
                #continue;
            }

            $path = Path::makeRelative($file, $consolePath);
            $path = Str::removeRight($path, '.php');
            $path = Str::replace($path, '/', '\\');

            if ( !Str::endsWith($path, 'Command', true) || $path === 'Command')
            {
                continue;
            }

            $className = '\Radic\Console\\' . $path;

            $path = Str::removeRight($path, 'Command');
            $binding = Str::removeLeft(Str::toSnakeCase($path), '_');
            $binding = Str::replace($binding, '_', '.');
            $binding = Str::replace($binding, '\\', '');
            $this->commands[$binding] = $path;
        }
    }

}
