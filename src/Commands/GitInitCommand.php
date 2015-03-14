<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;
class GitInitCommand extends Command
{

    protected $name = 'git:init';

    protected $description = 'Initialize a local repository';

    /**
     * @var \Github\Api\Repo
     */
    protected $repo;

    /**
     * @var \Github\Client
     */
    protected $gh;

    protected $username;

    public function fire()
    {
        $this->gh       = radic()->github;
        $this->repo     = radic()->github->repo();
        $this->username = radic()->config->get('github.username');


    }


}
