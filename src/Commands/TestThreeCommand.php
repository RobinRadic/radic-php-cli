<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Support\Arr;
use Radic\Path;

class TestThreeCommand extends \Radic\Console\Command
{

    protected $name = 'test:three';

    protected $description = 'Test 3';

    protected $help = "Yo mama";

    public function fire()
    {
        $dots = $this->dots('as');
        $dots->start();
        sleep(1);
        $started = false;
        $dots->stop();
    }
}
