<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Support\Arr;
use Radic\Path;
class TestOneCommand extends Command
{

    protected $name = 'test:one';

    protected $description = 'Test 1';

    protected $help = "Yo mama";

    public function fire()
    {

        $bindings = [];
        foreach(array_keys(radic()->getBindings()) as $k)
        {
            #if(in_array($k, ['files']))
            $class = @get_class(radic($k));
            if(class_exists($class))
            {
                $bindings[$k] = $class;
            }
        }
        $this->dump([
            'uid' => getmyuid(),
            'gid' => getmygid(),
            'pid' => getmypid(),
            'dirname FILE' => dirname(__FILE__),
            'path.base' => Path::canonicalize(radic('path.base')),
            'path.storage' => Path::canonicalize(radic('path.storage')),
            'encrypt' => radic()->encrypt('asdr'),
            'descrypt' => radic()->decrypt(radic()->encrypt('asdr')),
            'host' => gethostname(),
            'cwd' => getcwd(),

            'user' => get_current_user(),
            'argv' => $GLOBALS['argv'],
            'super user permissions' => radic()->hasRootAccess(),

            'bindings' => $bindings
        ]);

        #$this->dump(radic()->stub->getValues());
        #$this->dump(Arr::dot(radic()->config()->all()));

    }
}
