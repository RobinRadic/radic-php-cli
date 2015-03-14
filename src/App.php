<?php
/**
 * Part of the Radic packages.
 */
namespace Radic;

use Illuminate\Container\Container;
use Symfony\Component\VarDumper\VarDumper;

/**
 * Class App
 *
 * @package     Radic
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 *
 * @property-read \Illuminate\Filesystem\Filesystem $fs filesystem funcs
 * @property-read \Illuminate\Contracts\Cache\Store $cache caching store
 * @property-read \Github\Client $github the github stuff
 * @property-read \Illuminate\Events\Dispatcher $events the event dispatcher
 * @property-read \Illuminate\Log\Writer $log log writer
 * @property-read \Radic\Config $config configuration repo
 * @property-read \Radic\Stub $stub stubber
 *
 */
class App extends Container
{


    public function dumpSelf()
    {
        VarDumper::dump($this);

        return $this;
    }

    public function dump($var)
    {
        VarDumper::dump($var);

        return $this;
    }

    public function path()
    {
        $args = func_get_args();

        $bindedPaths = ['base', 'app', 'bin', 'vendor', 'home', 'storage'];

        if ( in_array($args[0], $bindedPaths) )
        {
            $name    = $args[0] . '.path';
            $args[0] = $this['path.' . $args[0]];
        }

        return Path::join($args);
    }

    public function getVersion()
    {
        return file_get_contents(__DIR__ . '/VERSION');
    }

    public function hasRootAccess()
    {
        $path = '/root/.' . md5('_radic-cli-perm-test' . time());
        $root = (@file_put_contents($path, '1') === false ? false : true);
        if($root !== false)
        {
            radic()->fs->delete($path);
        }
        return $root;
    }

    protected function getEncryptionKey()
    {
        return md5($this['path.storage'] . gethostname());
    }

    public function encrypt($str)
    {
        return @openssl_encrypt($str, 'AES-256-CBC', $this->getEncryptionKey() );
    }

    public function decrypt($str)
    {

        return @openssl_decrypt($str, 'AES-256-CBC', $this->getEncryptionKey());
    }
}
