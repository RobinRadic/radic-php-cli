<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;

use Illuminate\Support\Arr;
use Symfony\Component\Console\Input\InputArgument;
class ConfigUnsetCommand extends Command
{

    protected $name = 'config:unset';

    protected $description = 'Removes a config key';

    public function fire()
    {
        $key = $this->argument('key');

        if ( ! isset($key) )
        {
            $key = $this->ask('What do you want to set?');
        }

        radic()->config()->del($key)->save();

        $this->info('Config ' . $key . ' has been unset');

    }


    protected function getArguments()
    {
        return array(
            array('key', InputArgument::REQUIRED, 'The key/path')
        );
    }
}
