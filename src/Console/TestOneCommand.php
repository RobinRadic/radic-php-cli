<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Cli\Console;

use Sebwite\Support\Path;

class TestOneCommand extends Command
{

    protected $signature = 'test:one';

    protected $description = 'Test 1';

    protected $help = "Yo mama";

    public function handle()
    {

        $bindings = [];
        foreach (array_keys(app()->getBindings()) as $k) {
        #if(in_array($k, ['files']))
            $class = @get_class(app($k));
            if (class_exists($class)) {
                $bindings[$k] = $class;
            }
        }
        $this->dump([
            'uid' => getmyuid(),
            'gid' => getmygid(),
            'pid' => getmypid(),
            'dirname FILE' => dirname(__FILE__),
            'path.base' => Path::canonicalize(base_path()),
            'path.storage' => Path::canonicalize(storage_path()),
            'encrypt' => app()->encrypt('asdr'),
            'descrypt' => app()->decrypt(app()->encrypt('asdr')),
            'host' => gethostname(),
            'cwd' => getcwd(),

            'user' => get_current_user(),
            'argv' => $GLOBALS['argv'],
            'super user permissions' => app()->hasRootAccess(),

            'bindings' => $bindings
        ]);

        #$this->dump(app()->stub->getValues());
        #$this->dump(Arr::dot(app()->config()->all()));

    }
}
