<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Symfony\Component\Console\Input\InputArgument;


class ConfigGetCommand extends Command
{
    protected $name = 'config:get';
    protected $description = 'Get a config value';
    protected $help = "Yo mama";
    public function fire()
    {
        $args = $this->argument();

        if ( ! isset($args['key']) )
        {
            $args['key'] = $this->ask('What key/path do you want to show? (leave empty if you want to show all)');
        }
        $val = radic()->config->get($args['key']);

        $this->info('Showing ' . $this->style(['bold', 'yellow'], $args['key']));
        $this->dump($val);
    }



    protected function getArguments()
    {
        return array(
            array('key', InputArgument::OPTIONAL, 'The key/path')
        );
    }
}
