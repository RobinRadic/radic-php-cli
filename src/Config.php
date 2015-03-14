<?php
/**
 * Part of the Radic packages.
 */
namespace Radic;

use Illuminate\Config\Repository;
use Illuminate\Support\Arr;
/**
 * Class Config
 *
 * @package     Radic
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class Config extends Repository
{

    protected $configFilePath;

    public function __construct()
    {
        $this->configFilePath = radic()->path('storage', 'config.php');

        if ( ! radic()->fs->exists($this->configFilePath) and ! radic()->hasRootAccess())
        {
            radic()->fs->put($this->configFilePath, radic()->encrypt("<?php \n return " . var_export(array('configured' => false), true) . ';'));
        }

        $tmpPath = radic()->path('storage', '.config.php');
        radic()->fs->put($tmpPath, radic()->decrypt(radic()->fs->get($this->configFilePath)));
        $config = require $tmpPath;
        radic()->fs->delete($tmpPath);

        parent::__construct($config); // TODO: Change the autogenerated stub
    }

    /**
     * get default configuration
     *
     * @return array
     */
    public function getDefaults()
    {
        return [
            'cache' => [
                'default' => 'file',
                'stores'  => [
                    'apc'       => [
                        'driver' => 'apc'
                    ],
                    'array'     => [
                        'driver' => 'array'
                    ],
                    'database'  => [
                        'driver'     => 'database',
                        'table'      => 'cache',
                        'connection' => null,
                    ],
                    'file'      => [
                        'driver' => 'file',
                        'path'   => storage_path() . '/cache',
                    ],
                    'memcached' => [
                        'driver'  => 'memcached',
                        'servers' => [
                            [
                                'host'   => '127.0.0.1',
                                'port'   => 11211,
                                'weight' => 100
                            ],
                        ],
                    ],
                    'redis'     => [
                        'driver'     => 'redis',
                        'connection' => 'default',
                    ],
                ],
                'prefix'  => 'radic_cli',
            ]
        ];
    }

    /**
     * Saves the current config
     */
    public function save()
    {
        if(!radic()->hasRootAccess())
        {
            radic()->fs->put($this->configFilePath, radic()->encrypt("<?php \n return " . var_export($this->items, true) . ';'));
        }
        return $this;
    }

    /**
     * {@inheritdoc}
     *
     * @param array|string $key
     * @param null         $value
     * @return $this
     */
    public function set($key, $value = null)
    {
        parent::set($key, $value);

        return $this;
    }

    /**
     * {@inheritdoc}
     *
     * @param string $key
     * @param mixed  $value
     * @return $this
     */
    public function prepend($key, $value)
    {
        parent::prepend($key, $value);

        return $this;
    }

    /**
     * {@inheritdoc}
     *
     * @param string $key
     * @param mixed  $value
     * @return $this
     */
    public function push($key, $value)
    {
        parent::push($key, $value);

        return $this;
    }

    /**
     * Removes a configuration value/values completely
     *
     * @param string $key
     * @return $this
     */
    public function del($key)
    {
        Arr::forget($this->items, $key);
        return $this;
    }
}
