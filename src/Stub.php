<?php
/**
 * Part of the Radic packages.
 */
namespace Radic;

use Illuminate\Support\Arr;
use Stringy\Stringy;

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
     * @var string
     */
    protected $openDelimiter = '{';

    /**
     * @var string
     */
    protected $closeDelimiter = '}';

    /**
     * @var array
     */
    protected $values = array();

    /**
     * Instanciates the class
     */
    public function __construct()
    {
        $this->values = [
            'date.year'  => date("Y"),
            'date.month' => date("m"),
            'date.day'   => date("d"),
        ];

        $this->setVar(Arr::dot(radic()->config->all(), 'config.'));
    }

    /**
     * Copies a parsed stub file to the directory
     *
     * @param       $file
     * @param null  $to
     * @param array $values
     */
    public function copy($file, $to = null, array $values = [])
    {
        if ( is_array($file) )
        {
            foreach ($file as $_file)
            {
                $this->copy($_file, $to, $values);
            }
        }
        else
        {
            $srcFile = $file;
            if ( Stringy::create($srcFile)->startsWith('.') === true )
            {
                $srcFile = '_' . $srcFile;
            }
            $content = file_get_contents(__DIR__ . '/stubs/' . $srcFile);


            $to = is_null($to) ? $file : $to;
            $to = Path::isAbsolute($to) ? $to : Path::join(getcwd(), $to);

            radic()->fs->put($to, $this->parse($content, $values));
        }
    }

    /**
     * Parses a string and replaces the keys with values
     *
     * @param       $str
     * @param array $values
     * @return mixed
     */
    public function parse($str, array $values = [])
    {
        $keys = array();

        $values = array_merge($this->values, $values);

        foreach ($values as $key => $value)
        {
            $keys[] = $this->openDelimiter . $key . $this->closeDelimiter;
        }

        return str_replace($keys, $values, $str);
    }

    /**
     * Merges an array with values
     *
     * @param array $values
     * @param bool  $merge
     */
    public function setVar(array $values, $merge = true)
    {
        if ( ! $merge || empty($this->values) )
        {
            $this->values = $values;
        }
        else
        {
            $this->values = array_merge($this->values, $values);
        }
    }

    /**
     * @return array
     */
    public function getValues()
    {
        return $this->values;
    }
}
