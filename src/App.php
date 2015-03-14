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

        $bindedPaths = ['base', 'app', 'bin', 'vendor', 'home', 'storage'];

        if ( in_array($args[0], $bindedPaths) )
        {
            $name    = $args[0] . '.path';
            $args[0] = $this['path.' . $args[0]];
        }

        return Path::join($args);
    }

    public function getVersion()
    {
        return file_get_contents(__DIR__ . '/VERSION');
    }

    public function hasRootAccess()
    {
        $path = '/root/.' . md5('_radic-cli-perm-test' . time());
        $root = (@file_put_contents($path, '1') === false ? false : true);
        if($root !== false)
        {
            radic()->fs()->delete($path);
        }
        return $root;
    }
}
