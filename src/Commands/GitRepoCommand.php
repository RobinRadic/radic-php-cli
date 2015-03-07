<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


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
        $this->gh = radic()->github();
        $this->repo = radic()->github()->repo();
        $this->username = radic()->config()->get('github.username');

        $choices = [
            'create' => 'Create a repository',
            'list' => 'List all repositories',
            'remove' => 'Remove a repository',
            'show' => 'Show a repository'
        ];

        $choice = $this->choice('What do you want to do?', $choices);

        $do = 'list';
        foreach($choices as $k => $v)
        {
            if($choice === $v){
                $do = $k;
                break;
            }
        }
        $this->dump($choice);
        $this->dump($k);

        $this->{"action" . ucfirst($do)}();
    }

    protected function actionCreate()
    {
        $this->info('create');
        $name = $this->ask('Name of repository');
        $description = $this->ask('Description (optional)', '');
        $this->repo->create($name, $description);


    }
    protected function actionList()
    {
        $this->info('list');
        $repos = $this->gh->api('user')->repositories($this->username);
        $d = [];
        foreach($repos as $i => $repo)
        {
            $d[$repo['name']] = $repo['description'];
        }
        $this->arrayTable($d);
    }
    protected function pickRepo($question = 'pick repository')
    {
        $_repos = $this->gh->api('user')->repositories($this->username);
        $repos = [];
        $choices = [];
        foreach($_repos as $i => $repo)
        {
            $choices[$repo['name']] = $repo['name'];
            $repos[$repo['name']] = $repo;
        }
        $choice = $this->choice($question, $choices);
        return [ $choice, $repos, $choices ];
    }
    protected function actionRemove()
    {
        $this->info('remove');
        list($choice, $repos, $choices) = $this->pickRepo();
        if($this->confirm('Are you absolutely sure you want to remove ' . $this->style('red', $choice) . '? [y/n]', false))
        {
            if($this->confirm('Really?', true))
            {
                $repos[$choice]['full_name'];
                $this->gh->api('repo')->remove($this->username, $choice);
                $this->info('Removed repository');
                return;
            }
        }
        $this->info('Action aborted');

    }
    protected function actionShow()
    {
        #$this->dump($this->gh->api('user')->repositories($this->username));
        list($choice, $repos, $choices) = $this->pickRepo();
        $repo = $this->gh->repo()->show($this->username, $choice); #$repos[$choice]['name']);
        $this->arrayTable($repo);
        $this->info('show');
    }

}
