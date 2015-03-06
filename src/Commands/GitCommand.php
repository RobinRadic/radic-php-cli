<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


class GitCommand extends Command
{
    protected $name = 'git';
    protected $description = 'Git it';

    public function fire()
    {
        $this->line('Git is git');
    }
}
