<?php
/**
 * Part of the Robin Radic's PHP packages.
 *
 * MIT License and copyright information bundled with this package
 * in the LICENSE file or visit http://radic.mit-license.com
 */
namespace Radic;

use Illuminate\View\Factory as View;
use Radic\Traits\DotArrayAccessTrait;

/**
 * This is the Stubs class.
 *
 * @package        Radic
 */
class Stubs
{
    use DotArrayAccessTrait;

    protected function getArrayAccessor()
    {
        return 'attributes';
    }

    protected $attributes = [ ];

    /** @var \Illuminate\Filesystem\Filesystem */
    protected $fs;

    /**
     * @var \Illuminate\View\Factory
     */
    protected $view;

    /**
     * Absolute path to the source "stubs" directory
     *
     * @var
     */
    protected $from = false;

    /**
     * Absolute path to the destination directory
     *
     * @var string
     */
    protected $to;

    /** Instantiates the class
     *
     * @param \Radic\Filesystem        $fs
     * @param \Illuminate\View\Factory $view
     * @internal param \Laradic\Support\Filesystem $files
     */
    public function __construct(Filesystem $fs, View $view)
    {
        $this->fs   = $fs;
        $this->view = $view;
    }

    public function generate(array $files, array $values = [ ])
    {
        if(!$this->isExported())
        {
            return;
        }

        foreach ( $files as $src => $fileName )
        {
            $segments    = explode('/', $src);
            $srcFileName = last($segments);
            array_pop($segments);
            $srcDir = implode('/', $segments);


            $destinationDir = path_join($this->to, $srcDir);
            if ( $fileName === false )
            {
                $fileName = str_replace('.stub', '', $srcFileName);
            }
            $destinationPath = path_join($destinationDir, $fileName);

            if ( $this->from === false )
            {
                $this->from = $this->getStubDir();
            }

            $src = path_join($this->from, $src);

            if ( ! $this->fs->isDirectory($destinationDir) )
            {
                $this->mkdir($destinationDir);
            }

            $content = $this->render($src, array_replace_recursive($this->attributes, $values));
            $this->fs->put($destinationPath, $content);
        }
    }

    public function render($filePath, array $values = [ ])
    {
        return $this->view
            ->file($filePath)
            ->with(array_replace_recursive($this->attributes, $values))
            ->render();
    }

    public function isExported()
    {
        return $this->fs->exists($this->getStubDir());
    }

    public function getStubDir()
    {
        return path_join(storage_path(), 'stubs');
    }

    protected function mkdir()
    {
        $this->fs->makeDirectory(path_join(func_get_args()), 0755, true);

        return $this;
    }

    public function set($key, $value = null)
    {
        $this->offsetSet($key, $value);

        return $this;
    }

    /**
     * get to value
     *
     * @return string
     */
    public function getTo()
    {
        return $this->to;
    }

    /**
     * Set the to value
     *
     * @param string $to
     * @return $this
     */
    public function to($to)
    {
        $this->to = $to;

        return $this;
    }

    /**
     * get from value
     *
     * @return mixed
     */
    public function getFrom()
    {
        return $this->from;
    }

    /**
     * Set the from value
     *
     * @param mixed $from
     * @return $this
     */
    public function from($from)
    {
        $this->from = $from;

        return $this;
    }

    /**
     * get attributes value
     *
     * @return array
     */
    public function getAttributes()
    {
        return $this->attributes;
    }
}
