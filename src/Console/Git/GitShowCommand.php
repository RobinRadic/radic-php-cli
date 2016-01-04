<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Cli\Console\Git;

use Radic\Console\Command;
use Symfony\Component\Console\Input\InputArgument;

class GitShowCommand extends Command
{

    protected $name = 'git:show';

    protected $description = 'Control a repository';

    public function fire()
    {
        #$this->dump(app()->github->me()->show());
        $cg = app()->config->get('github');
        $u = $cg['username'];
        $g = app()->github;
        $w = $this->argument('what');
        $d = [];

        $this->info('Getting result..');

        switch ($w) {
            case 'me':
                $d = $g->me()->show();
                break;
            case 'repos':
                $repos = $g->api('user')->repositories($u);
                foreach ($repos as $i => $repo) {
                    $d[$repo['name']] = $repo['description'];
                }
                break;
            #case 'me': $d = $g->me()->show(); break;
            #case 'me': $d = $g->me()->show(); break;
            #case 'me': $d = $g->me()->show(); break;
            default:
                $d = $g->me()->show();
                break;
        }


        $this->arrayTable($d);

        $this->line('Git is git');
    }


    protected function getArguments()
    {
        return array(
            array('what', InputArgument::REQUIRED, 'What to show [me|repos|orgs]')
        );
    }
}
