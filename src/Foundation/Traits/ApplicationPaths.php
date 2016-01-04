<?php
/**
 * Part of the Sebwite PHP packages.
 *
 * License and copyright information bundled with this package in the LICENSE file
 */


namespace Radic\Foundation\Traits;

use Sebwite\Support\Path;


/**
 * This is the class ApplicationPaths.
 *
 * @package        Radic\Cli
 * @author         Sebwite
 * @copyright      Copyright (c) 2015, Sebwite. All rights reserved
 * @mixin \Radic\Foundation\Application
 */
trait ApplicationPaths
{

    /**
     * The base path for the Laravel installation.
     *
     * @var string
     */
    protected $basePath;

    /**
     * The custom database path defined by the developer.
     *
     * @var string
     */
    protected $databasePath;

    /**
     * The custom storage path defined by the developer.
     *
     * @var string
     */
    protected $storagePath;


    /**
     * Set the base path for the application.
     *
     * @param  string $basePath
     *
     * @return $this
     */
    public function setBasePath($basePath)
    {
        #$this->basePath = rtrim($basePath, '\/');
        $this->basePath = $basePath;

        $this->bindPathsInContainer();

        return $this;
    }

    /**
     * Bind all of the application paths in the container.
     *
     * @return void
     */
    protected function bindPathsInContainer()
    {
        $this->instance('path', $this->path());

        foreach ( [ 'base', 'config', 'database', 'lang', 'public', 'storage', 'home', 'export' ] as $path )
        {
            $ret = $this->{$path . 'Path'}();
            $this->instance('path.' . $path, $ret);
        }
    }

    /**
     * Get the path to the application "app" directory.
     *
     * @return string
     */
    public function path()
    {
        return Path::join($this->basePath, 'src', 'app');
    }

    public function basePath()
    {
        return $this->basePath;
    }

    public function configPath()
    {
        return Path::join($this->exportPath(), 'config');
    }

    public function langPath()
    {
        return Path::join($this->exportPath(), 'resources', 'lang');
    }

    public function publicPath()
    {
        return Path::join($this->exportPath(), 'public');
    }

    public function homePath()
    {
        return getenv("HOME");
    }

    public function exportPath()
    {
        return Path::join(getenv("HOME"), '.radic-php-cli');
    }


    public function databasePath()
    {
        return $this->databasePath ?: Path::join($this->exportPath(), 'database');
    }

    public function storagePath()
    {
        return $this->storagePath ?: Path::join($this->exportPath(), 'storage');
    }

    /**
     * Set the storage directory.
     *
     * @param  string $path
     *
     * @return $this
     */
    public function useStoragePath($path)
    {
        $this->storagePath = $path;

        $this->instance('path.storage', $path);

        return $this;
    }

    /**
     * Set the database directory.
     *
     * @param  string $path
     *
     * @return $this
     */
    public function useDatabasePath($path)
    {
        $this->databasePath = $path;

        $this->instance('path.database', $path);

        return $this;
    }

}
