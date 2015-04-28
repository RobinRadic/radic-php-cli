<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


class MakeChangelogCommand extends Command
{

    protected $name = 'make:changelog';

    protected $description = 'Create a changelog';

    public function fire()
    {
        $this->comment('Generating changelog..');


        if ( ! radic()->stubs->isExported() )
        {
            return $this->error('You have not exported the stubs file yet. Do so using make:export');
        }

        // get owner/repo
        $ini = parse_ini_string(radic()->fs->get(path_join(getcwd(), '.git/config')), true);
        $segments = explode('/', $ini['remote origin']['url']);
        $repo = last($segments);
        array_pop($segments);
        $owner = last($segments);
        #return $this->dump(compact('ini', 'segments', 'repo', 'owner'));
        $owner = $this->ask('Owner?', $owner);
        $repo = $this->ask('Repository?', $repo);
        $repoUrl = "https://github.com/$owner/$repo";


        exec('git log --date=short --format="- [%cd](commit/%H) %gs %s  " 2>&1', $commitLog, $return);
        preg_match_all('/-\s\[([\d-]*)\]\(commit\/([\w\d]*)\)[\s\t]*(.*)/', implode("\n", $commitLog), $matches);

        $commits = [ ];
        if ( count($matches) === 4 and count($matches[ 1 ]) > 0 )
        {
            foreach ( $matches[ 1 ] as $i => $date )
            {
                $commits[ ] = [
                    'date'    => $date,
                    'ref'     => $matches[ 2 ][ $i ],
                    'message' => $matches[ 3 ][ $i ]
                ];
            }
        }

        exec('git tag -l -n10 2>&1', $tagLog, $return);

        $tags = [ ];
        foreach ( $tagLog as $i => $tag )
        {
            preg_match('/^(\d)\.(\d)\.(\d)[\s\t]*(.*)/', $tag, $matches);
            $tags[ ] = [
                'version' => $matches[ 1 ] . '.' . $matches[ 2 ] . '.' . $matches[ 3 ],
                'major'   => $matches[ 1 ],
                'minor'   => $matches[ 2 ],
                'patch'   => $matches[ 3 ],
                'message' => $matches[ 4 ],
            ];
        }

        $tags = array_reverse($tags);

        radic()->stubs
            ->set(compact('repoUrl', 'commits', 'tags'))
            ->to(getcwd())
            ->generate([ 'CHANGELOG.md.stub' => false ]);

        $this->info('All done sire');
    }
}
