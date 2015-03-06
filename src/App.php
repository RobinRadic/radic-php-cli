<?php
/**
 * Part of the Radic packages.
 */
namespace Radic;

use Illuminate\Container\Container;
use Symfony\Component\VarDumper\VarDumper;

/**
 * Class App
 *
 * @package     Radic
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class App extends Container
{

    public function dumpSelf()
    {
        VarDumper::dump($this);

        return $this;
    }

    public function dump($var)
    {
        VarDumper::dump($var);

        return $this;
    }

    /**
     * Local project files
     * @return \League\Flysystem\Filesystem
     */
    public function files()
    {
        return $this->make('files');
    }

    /**
     * @return \Illuminate\Filesystem\Filesystem
     */
    public function fs()
    {
        return $this->make('fs');
    }

    /**
     * @return \Radic\Config
     */
    public function config()
    {
        return $this->make('config');
    }

    /**
     * This will return events
     *
     * @return \Illuminate\Events\Dispatcher
     */
    public function events()
    {
        return $this->make('events');
    }

    /**
     * @return \Github\Client
     */
    public function github()
    {
        return $this->make('github');
    }

    public function path()
    {
        $args = func_get_args();

        $bindedPaths = ['base', 'app', 'bin', 'vendor', 'home'];

        if ( in_array($args[0], $bindedPaths) )
        {
            $name    = $args[0] . '.path';
            $args[0] = $this['path.' . $args[0]];
        }

        return Path::join($args);
    }
}
