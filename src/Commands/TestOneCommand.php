<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


class TestOneCommand extends Command
{

    protected $name = 'test:one';

    protected $description = 'Test 1';

    protected $help = "Yo mama";

    public function fire()
    {
        $this->dump([
            'uid' => getmyuid(),
            'gid' => getmygid(),
            'pid' => getmypid(),
            'dirname FILE' => dirname(__FILE__),
            'cwd' => getcwd(),
            'user' => get_current_user(),
            'argv' => $GLOBALS['argv'],
            'super user permissions' => radic()->hasRootAccess()
        ]);

    }
}
