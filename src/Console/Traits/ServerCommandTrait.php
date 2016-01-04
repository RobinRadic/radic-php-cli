<?php
 /**
 * Part of the Radic packages.
 */
namespace Radic\Console\Traits;

/**
 * trait LastPassTrait
 *
 * @package     Radic\Commands\Traits
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
trait ServerCommandTrait
{
    protected $serverRouterFileName = 'server.php';

    protected function ensureServerRouterFile()
    {
        $path = $this->getServerRouterFilePath();
        if (app()->fs->exists($path)) {
            return;
        }
        $content = file_get_contents(__DIR__ . '/../../stubs/server.php');
        app()->fs->put($path, $content);
    }

    protected function getServerRouterFilePath()
    {
        return app()->path('storage', $this->serverRouterFileName);
    }

    protected function isServerStarted()
    {
        exec('screen -q -ls "radic-php-server"', $out, $ret);
        return $ret === 11;
    }

    protected function startServer($host = '127.0.0.1', $port = 7766)
    {
        $routerFilePath = $this->getServerRouterFilePath();
        chdir(storage_path());
        $exec = exec("screen -dmS radic-php-server php -S {$host}:{$port} $routerFilePath");
    }

    protected function stopServer()
    {
        exec('kill -9 ' . $this->getRunningServerId(), $o);
        exec('screen -wipe ' . $this->getRunningServerId(), $o2);
    }

    protected function getRunningServerId()
    {
        if ($this->isServerStarted()) {
            exec("screen -ls 'radic-php-server' | grep etached | cut -d. -f1 | awk '{print $1}'", $out);

            return reset($out);
        }
        return false;
    }
}
