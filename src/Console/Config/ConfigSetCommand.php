<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Cli\Console\Config;

use Radic\Cli\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class ConfigSetCommand extends Command
{

    protected $name = 'config:set';

    protected $description = 'Set a config value';

    public function fire()
    {
        $args = $this->argument();

        if (! isset($args['key'])) {
            $args['key'] = $this->ask('What do you want to set?');
        }
        if (! isset($args['value'])) {
            $args['value'] = $this->ask("What value do you want to assign?");
        }
        if ($args['value'] === 'true' || $args['value'] === 'false') {
            $args['value'] = (bool) $args['value'];
        }


        app()->config->set($args['key'], $args['value'])->save();

        $this->info('Config ' . $args['key'] . ' has been set and saved');

    }


    protected function getArguments()
    {
        return array(
            array('key', InputArgument::OPTIONAL, 'The key/path'),
            array('value', InputArgument::OPTIONAL, 'The value')
        );
    }
}
