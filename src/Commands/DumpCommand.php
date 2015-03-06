<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;

use Symfony\Component\Console\Input\InputArgument;
class DumpCommand extends Command
{
    protected $name = 'dump';
    protected $description = 'Dump radic to the console';

    public function fire()
    {
        \Radic\App::getInstance()->dumpSelf();
    }
    /**
     * Get the console command options.
     *
     * @return array
     */
    protected function getOptions()
    {
        return array(
            #array($name, $shortcut, $mode, $description, $defaultValue)
            #array('force', null, InputOption::VALUE_NONE, 'Force the compiled class file to be written.'),
            #array('psr', null, InputOption::VALUE_NONE, 'Do not optimize Composer dump-autoload.'),
        );
    }

    protected function getArguments()
    {
        return array(
            #array($name, $mode, $description, $defaultValue)
            #array('key', InputArgument::REQUIRED, 'The key')
        );
    }

}
