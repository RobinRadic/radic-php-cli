<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Support\Arr;
use Symfony\Component\Console\Input\InputArgument;
class GitShowCommand extends Command
{

    protected $name = 'git:show';

    protected $description = 'Control a repository';

    public function fire()
    {
        #$this->dump(radic()->github->me()->show());
        $cg = radic()->config->get('github');
        $u = $cg['username'];
        $g = radic()->github;
        $w = $this->argument('what');
        $d = [];

        switch ($w)
        {
            case 'me': $d = $g->me()->show(); break;
            case 'repos':
                $repos = $g->api('user')->repositories($u);
                foreach($repos as $i => $repo)
                {
                    $d[$repo['name']] = $repo['description'];
                }
                break;
            #case 'me': $d = $g->me()->show(); break;
            #case 'me': $d = $g->me()->show(); break;
            #case 'me': $d = $g->me()->show(); break;
            default: $d = $g->me()->show(); break;
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
