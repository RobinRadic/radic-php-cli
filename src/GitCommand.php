<?php
/**
 * Part of the Radic packages.
 */
namespace Radic;


use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Class ListCommand
 *
 * @package     Radic\Gitter
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class GitCommand extends Command
{
    protected function configure()
    {
        $this
            ->setName('git')
            ->setDescription('Thisa i git ');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln('Hello World');
    }
}
