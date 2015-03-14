<?php
/**
 * Part of the Radic packages.
 */
namespace Radic;

use Illuminate\Filesystem\Filesystem as BaseFS;
use RecursiveDirectoryIterator;
use RecursiveIteratorIterator;
use RegexIterator;

/**
 * Class Filesystem
 *
 * @package     Radic
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class Filesystem extends BaseFS
{
    /**
     * Recursive glob
     *
     * @param $pattern
     * @param int $flags
     * @return array
     */
    public function rglob($pattern, $flags = 0)
    {
        $files = glob($pattern, $flags);
        foreach (glob(dirname($pattern) . '/*', GLOB_ONLYDIR | GLOB_NOSORT) as $dir)
        {
            $files = array_merge($files, $this->rglob($dir . '/' . basename($pattern), $flags));
        }

        return $files;
    }

    /**
     * Search the folder recursively for files using regular expressions
     *
     * @param $folder
     * @param $pattern
     * @return array
     */
    public function rsearch($folder, $pattern)
    {
            $dir      = new RecursiveDirectoryIterator($folder);
            $ite      = new RecursiveIteratorIterator($dir);
            $files    = new RegexIterator($ite, $pattern, RegexIterator::GET_MATCH);
            $fileList = array();
            foreach ($files as $file)
            {
                $fileList = array_merge($fileList, $file);
            }

            return $fileList;
    }


}
