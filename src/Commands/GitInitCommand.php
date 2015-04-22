<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


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

        if ( $opts[ 'remote' ] != 'no' )
        {
            $opts[ 'owner' ]      = $this->ask('Owner name [' . $this->username . ']');
            $opts[ 'repository' ] = $this->ask('Repository name');
            $opts[ 'push' ]       = $this->confirm('create .gitignore', true);
        }

        #$this->dump($opts);

        if ( $opts[ 'stubs' ] )
        {
            radic()->stub->copy(
                [ '.gitignore', 'LICENSE', 'README.md', '.editorconfig' ],
                null,
                [
                    'title'      => $opts[ 'title' ],
                    'repository' => isset($opts[ 'repository' ]) ? $opts[ 'repository' ] : '',
                    'owner'      => $opts[ 'owner' ]
                ]
            );
        }

        $commands = [ 'git init', 'git add -A' ];
        if ( $opts[ 'commit' ] )
        {
            $commands[ ] = 'git commit -m "Initial commit"';
        }
        if ( $opts[ 'remote' ] != "no" )
        {
            $remoteUrl   = 'https://' . $this->username . ':' . $this->secret(
                    'git pass'
                ) . '@github.com/' . $this->username . '/' . $opts[ 'repository' ];
            $commands[ ] = 'git remote add origin ' . $remoteUrl;

            if ( $opts[ 'remote' ] == 'add' )
            {
                try
                {
                    if ( $opts[ 'owner' ] == $this->username )
                    {
                        $this->gh->repo()->create($opts[ 'repository' ]);
                    }
                    else
                    {
                        $this->gh->repo()->create($opts[ 'repository' ], '', '', true, $opts[ 'owner' ]);
                    }
                }
                catch (\Github\Exception\RuntimeException $e)
                {
                    $this->error($e->getMessage());
                }
            }

            if ( $opts[ 'push' ] )
            {
                $commands[ ] = 'git push -u origin master';
            }
        }

        foreach ( $commands as $cmd )
        {
            $command = radic()->sh($cmd);
            if ( $command->execute() )
            {
                $this->info($command->getOutput());
            }
            else
            {

                $this->error($command->getError());
                #$exitCode = $command->getExitCode();
                if ( $this->confirm('Error happened, we should quit right?', true) )
                {
                    break;
                }
            }
        }
    }
}
