<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Support\Arr;
use Radic\Commands\Traits\ServerCommandTrait;
use Radic\Path;

class ServerStartCommand extends Command
{
    use ServerCommandTrait;

    protected $name = 'server:start';

    protected $description = 'Starts radic server';

    protected $help = "Yo mama";

    public function fire()
    {
        if($this->isServerStarted()){
            $this->error('Cannot start server, already running.');
            return;
        }
        $this->ensureServerRouterFile();
        $this->startServer();
        $this->info('Done');
    }
}
