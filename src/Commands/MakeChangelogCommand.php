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

        radic()->stubs
            ->to(getcwd())
            ->generate([ 'test.stub' => false ]);

        exec('git tag -l -n10'); // 2>&1', $tagLog, $return);
    }
}
