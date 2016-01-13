<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Console;

use Sebwite\Support\Path;

class TestOneCommand extends Command
{

    protected $signature = 'test:one';

    protected $description = 'Test 1';

    protected $help = "Yo mama";

    public function handle()
    {
        $w = app('sebwite.git')->connection('github')->listWebhooks('blade-extensions', 'robinradic');



        $a = 'a';

    }
}
