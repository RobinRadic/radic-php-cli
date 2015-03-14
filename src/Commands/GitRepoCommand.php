<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Support\Str;
use Symfony\Component\Console\Input\InputArgument;
class GitRepoCommand extends Command
{

    protected $name = 'git:repo';

    protected $description = 'Control a repository';

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

        $args = $this->argument();

        $choices = [
            'create' => 'Create a repository',
            'list'   => 'List all repositories',
            'remove' => 'Remove a repository',
            'show'   => 'Show a repository'
        ];

        if ( isset($args['action']) && in_array($args['action'], array_keys($choices)) )
        {
            $do = $args['action'];
        }
        else
        {
            $choice = $this->choice('What do you want to do?', $choices);

            $do = 'list';
            foreach ($choices as $k => $v)
            {
                if ( $choice === $v )
                {
                    $do = $k;
                    break;
                }
            }
        }

        $this->{"action" . ucfirst($do)}();
    }


    protected function getArguments()
    {
        return array(
            array('action', InputArgument::OPTIONAL, 'The action you want to perform [create|list|remove|show]'),
            array('name', InputArgument::OPTIONAL, 'The name of the repository you want to perform the action on')
        );
    }

    protected function actionCreate()
    {
        #$this->info('create');
        $name = $this->argument('name') or $this->ask('Name of repository');
        #$description = $this->ask('Description (optional)', '');
        try
        {
            $this->repo->create($name, "");
        } catch (\Github\Exception\RuntimeException $e)
        {
            $this->error($e->getMessage());
        }
        $this->info('Successfully created repository ' . $name . ' for ' . $this->username);
    }

    protected function actionList()
    {
        #$this->info('Listing repositories');
        $repos  = $this->gh->api('user')->repositories($this->username);
        $search = $this->argument('name');
        $d      = [];
        foreach ($repos as $i => $repo)
        {
            if ( isset($search) )
            {
                if ( ! Str::contains($repo['name'], $search) and ! Str::contains($repo['description'], $search) )
                {
                    continue;
                }
            }
            $d[$repo['name']] = Str::limit($repo['description'], 30);
        }
        $this->arrayTable($d);
    }

    protected function pickRepo($question = 'pick repository')
    {
        $_repos  = $this->gh->api('user')->repositories($this->username);
        $repos   = [];
        $choices = [];
        foreach ($_repos as $i => $repo)
        {
            $choices[$repo['name']] = $repo['name'];
            $repos[$repo['name']]   = $repo;
        }

        $name = $this->argument('name');

        return isset($name) ? $name : $this->choice($question, $choices);
    }

    protected function actionRemove()
    {
        $choice = $this->pickRepo();
        #$this->dump($choice);
        if ( $this->confirm('Are you absolutely sure you want to remove ' . $this->style(['bg_light_red', 'white', 'bold'], " $choice "), false) )
        {
            if ( $this->confirm('Really?', true) )
            {
                try
                {
                    $this->gh->repo()->remove($this->username, $choice);
                    $this->info('Removed repository');
                } catch (\Github\Exception\RuntimeException $e)
                {
                    $this->error($e->getMessage());
                }

                return;
            }
        }
        $this->info('Action aborted');
    }

    protected function actionShow()
    {
        $choice = $this->pickRepo();
        try
        {
            $repo = $this->gh->repo()->show($this->username, $choice);
            $this->arrayTable($repo);
        } catch (\Github\Exception\RuntimeException $e)
        {
            $this->error($e->getMessage());
        }
    }
}
