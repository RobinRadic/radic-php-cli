<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Support\Arr;
use Radic\Path;
class TestTwoCommand extends Command
{

    protected $name = 'test:two';

    protected $description = 'Test 2';

    protected $help = "Yo mama";

    public function fire()
    {
        #$fd = inotify_init();
        $path = radic()->path(getcwd(), '*');
        $this->dump($path);
       # $paths = radic()->fs->rglob($path);
        $paths = radic()->fs->rsearch(getcwd(), '/.*(?:\.md|\.h)/');
        $this->dump($paths);
        #inotify_add_watch($fd, radic()->fs->glob())


    }
}
