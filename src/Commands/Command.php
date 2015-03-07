<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Commands;


use Illuminate\Console\Command as BaseCommand;
use Illuminate\Support\Arr;
use JakubOnderka\PhpConsoleColor\ConsoleColor;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;


/**
 * Class ListCommand
 *
 * @package     Radic\Gitter
 * @author      Robin Radic
 * @license     MIT
 * @copyright   2011-2015, Robin Radic
 * @link        http://radic.mit-license.org
 */
abstract class Command extends BaseCommand
{

    /**
     * @var \JakubOnderka\PhpConsoleColor\ConsoleColor
     */
    protected $colors;

    public function __construct($name = null)
    {
        parent::__construct();
        $this->colors = new ConsoleColor();
    }

    abstract public function fire();

    public function getApplication()
    {
        return radic();
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $method = method_exists($this, 'handle') ? 'handle' : 'fire';
        radic()->events()->fire('command.firing', $this->name);
        $fire = $this->fire();
        radic()->events()->fire('command.fired', $this->name);
        return $fire;
    }

    protected function style($styles, $str)
    {
        return $this->colors->apply($styles, $str);
    }

    protected function dump($var)
    {
        $this->getApplication()->dump($var);
    }

    protected function arrayTable($arr)
    {

        $rows = [];
        foreach($arr as $key=>$val){
            if(is_array($val)){
                $val = print_r(array_slice($val, 0, 5), true);
            }
            $rows[] = [(string)$key, (string)$val];
        }
        $this->table(['Key', 'Value'], $rows);
    }
}
