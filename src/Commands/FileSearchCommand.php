<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Radic\Path;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputOption;

class FileSearchCommand extends Command
{
    protected $allowSudo = true;

    protected $name = 'file:search';

    protected $description = 'Search for files using regex';

    protected $help = "Example: file:search \".*\\.md\" /home";

    public function fire()
    {
        $pattern   = $this->argument('pattern');
        $dir       = $this->argument('directory');
        $modifiers = $this->option('modifiers');

        if ( $dir != getcwd() )
        {
            if ( Path::isRelative($dir) )
            {
                $dir = Path::join(getcwd(), $dir);
            }

            if ( ! radic()->fs->exists($dir) )
            {
                $this->error("Could not search trough directory. Directory [$dir] does not exist.");
                exit;
            }
        }

        $paths = radic()->fs->rsearch($dir, '/' . $pattern . '/' . $modifiers);

        $this->dump($paths);
    }


    protected function getArguments()
    {
        return array(
            array('pattern', InputArgument::REQUIRED, 'The regex pattern.'),
            array('directory', InputArgument::OPTIONAL, 'Directory to search in.', getcwd())
        );
    }

    protected function getOptions()
    {
        return [
            ['modifiers', 'm', InputOption::VALUE_OPTIONAL, 'Regex flags', '']
        ];
    }
}
