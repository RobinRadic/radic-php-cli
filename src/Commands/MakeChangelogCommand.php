<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Symfony\Component\Console\Input\InputArgument;


class MakeChangelogCommand extends Command
{
    protected $name = 'make:changelog';
    protected $description = 'Create a changelog';

    public function fire()
    {
        $this->comment('Generating changelog..');

        exec('git log --date=short --format="- [%cd](commit/%H) %gs %s  " 2>&1', $commitLog, $return);
        preg_match_all('/-\s\[([\d-]*)\]\(commit\/([\w\d]*)\)[\s\t]*(.*)/', implode("\n", $commitLog), $matches);

        $commits = [];
        if(count($matches) === 4 and count($matches[1]) > 0){
            foreach($matches[1] as $i => $date)
            {
                $commits[] = [
                    'date' => $date,
                    'ref' => $matches[2][$i],
                    'message' => $matches[3][$i]
                ];
            }
        }

        #$view = radic()->blade->view()->make('test')->with(['yes' => true, 'content' => 'testContent'])->render();
        #print $view;

        radic()->stubs
            #->from(__DIR__ . '/../stubs')
            ->to(getcwd())
            ->generate(['test.stub' => false]);

        exec('git tag -l -n10'); // 2>&1', $tagLog, $return);
    }



    protected function getArguments()
    {
        return array(
            array('key', InputArgument::OPTIONAL, 'The key/path')
        );
    }
}
