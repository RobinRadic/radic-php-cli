<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Support\Arr;
use Radic\Commands\Traits\ServerCommandTrait;
use Radic\Path;

class ServerStatusCommand extends Command
{
    use ServerCommandTrait;

    protected $name = 'server:status';

    protected $description = 'Starts radic server';

    protected $help = "Yo mama";

    public function fire()
    {
        if($this->isServerStarted()){
            $this->info('Server is running.');
        } else {
            $this->comment('Server is stopped.');
        }
    }
}
