<?php
/**
 * Part of the Laradic packages.
 * MIT License and copyright information bundled with this package in the LICENSE file.
 *
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
namespace Radic\Console;

use Thread;

/**
 * Class Worker
 *
 * @package Radic\Console
 */
class Worker extends Thread
{

    protected static $types = [
        'dots'    => 'Radic\Console\Notify\Dots',
        'spinner' => 'Radic\Console\Notify\Spinner',
        'bar'     => 'Radic\Console\Progress\Bar'
    ];

    protected $class;

    /**
     * Instantiates the class
     */
    protected function __construct($type, $message, $total = null)
    {
        $this->class = new static::$types[$type]($message);
    }

    public static function make($type, $message, $total = null)
    {
        $worker = new static($type, $message, $total);
        return $worker;
    }

    public function stop()
    {
        $this->class->finished();
        $this->kill();
    }

    public function run()
    {
        while(true)
        {
            usleep(100000);
            $this->class->tick();
        }
    }
}
