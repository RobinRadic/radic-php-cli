<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Console\Git;

use Radic\Console\Command;

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

    protected $actions = [ ];

    protected function addAction(\Closure $action)
    {
        $this->actions[ ] = $action;
    }

    protected function executeActions(array $opts = array())
    {
        foreach ($this->actions as $action) {
            $action($this, $opts);
        }
        $this->actions = [ ];
    }

    public function fire()
    {
        $this->gh       = app()->github;
        $this->repo     = app()->github->repo();
        $this->username = app()->config->get('github.username');

        $opts             = [ ];
        $opts[ 'owner' ]  = $this->username;
        $opts[ 'stubs' ]  = $this->confirm('Create .gitignore, license, readme and editorconfig?', true);
        $opts[ 'commit' ] = $this->confirm('Do an initial commit?', true);
        $opts[ 'remote' ] = $this->select(
            'Add or create a remote?',
            [
                'add'    => 'Add a remote',
                'create' => 'Add and create a remote',
                'no'     => 'Skip this'
            ]
        );

        $opts[ 'title' ] = $this->ask('Project title');

        if ($opts[ 'remote' ] != 'no') {
            $opts[ 'owner' ]      = $this->ask('Owner name', $this->username);
            $opts[ 'repository' ] = $this->ask('Repository name');
            $opts[ 'push' ]       = $this->confirm('create .gitignore', true);
        }

        #$this->dump($opts);


        if ($opts[ 'stubs' ]) {
            $this->addAction(function ($class, $opts) {

                app()->stub->copy(
                    [ '.gitignore', 'LICENSE', 'README.md', '.editorconfig' ],
                    null,
                    [
                        'title'      => $opts[ 'title' ],
                        'repository' => isset($opts[ 'repository' ]) ? $opts[ 'repository' ] : '',
                        'owner'      => $opts[ 'owner' ]
                    ]
                );
            });
        }

        $this->addAction(function ($class, $opts) {

            $class->executeCommands([ 'git init', 'git add -A' ]);
        });

        if ($opts[ 'commit' ]) {
            $this->addAction(function ($class, $opts) {

                $class->executeCommands('git commit -m "Initial commit"');
            });
        }

        if ($opts[ 'remote' ] != "no") {
            $opts[ 'git_pass' ] = $this->secret('git pass');

            $this->addAction(function ($class, $opts) {

                $remoteUrl =
                    'https://' . $class->username . ':' . $opts[ 'git_pass' ] .
                    '@github.com/' . $opts[ 'owner' ] . '/' . $opts[ 'repository' ];

                $class->executeCommands('git remote add origin ' . $remoteUrl);
            });

            if ($opts[ 'remote' ] == 'add') {
                $this->addAction(function ($class, $opts) {

                    $class->executeCommands();
                    try {
                        if ($opts[ 'owner' ] == $this->username) {
                            $this->gh->repo()->create($opts[ 'repository' ]);
                        } else {
                            $this->gh->repo()->create($opts[ 'repository' ], '', '', true, $opts[ 'owner' ]);
                        }
                    } catch (\Github\Exception\RuntimeException $e) {
                        $this->error($e->getMessage());
                    }
                });
            }

            if ($opts[ 'push' ]) {
                $this->addAction(function ($class, $opts) {

                    $class->executeCommands('git push -u origin master');
                });
            }
        }

        $this->executeActions($opts);
    }

    public function executeCommands($cmd)
    {
        if (is_array($cmd)) {
            foreach ($cmd as $c) {
                $this->executeCommand($c);
            }
        } else {
            $command = app()->sh($cmd);
            if ($command->execute()) {
                $this->info($command->getOutput());
            } else {

                $this->error($command->getError());
                #$exitCode = $command->getExitCode();
                if ($this->confirm('Error happened, we should quit right?', true)) {
                    exit;
                }
            }
        }
    }
}
