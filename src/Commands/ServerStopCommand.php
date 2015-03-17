<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Support\Arr;
use Radic\Commands\Traits\ServerCommandTrait;
use Radic\Path;

class ServerStopCommand extends Command
{
    use ServerCommandTrait;

    protected $name = 'server:stop';

    protected $description = 'Stops radic server';

    protected $help = "Yo mama";

    public function fire()
    {
        if($this->isServerStarted()){
            $this->stopServer();
            $this->info('Stopped the server');
        } else {
            $this->error('Couldnt stop the server, because the server was not running.');
        }

    }
}
