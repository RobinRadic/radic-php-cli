<?php
 /**
 * Part of the Radic packages.
 */
namespace Radic;


use Webmozart\PathUtil\Path as BasePath;


/**
 * Class Path
 *
 * @package     Radic
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class Path extends BasePath
{

    /**
     * Joins a split file system path.
     *
     * @param mixed $path Array or parameters of strings , The split path.
     *
     * @return string The joined path.
     */
    public static function join()
    {
        $args = func_get_args();
        if(func_num_args() === 1 and is_array($args[0]))
        {
            return static::canonicalize(join(DIRECTORY_SEPARATOR, $args[0]));
        }
        else
        {
            return static::canonicalize(join(DIRECTORY_SEPARATOR, $args));
        }

    }
}
