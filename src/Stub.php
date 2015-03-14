<?php
/**
 * Part of the Radic packages.
 */
namespace Radic;

/**
 * Class Stub
 *
 * @package     Radic
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
class Stub
{
    /**
     * Instanciates the class
     */
    public function __construct()
    {
    }

    public function copy($file, $to = null)
    {
        if ( is_array($file) )
        {
            foreach ($file as $_file)
            {
                $this->copy($_file);
            }
        }
        else
        {
            $content = file_get_contents(__DIR__ . '/' . $file);
            if ( ! is_null($to) )
            {
                $to = Path::isAbsolute($to) ? $to : Path::join(getcwd(), $to);
                radic()->fs->put($to, $content);
            }
        }
    }
}
