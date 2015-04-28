<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Console;

use Illuminate\Console\Command as BaseCommand;
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
     * @var bool
     */
    protected $allowSudo = false;

    /**
     * @var bool
     */
    protected $requireSudo = false;

    /**
     * @var \JakubOnderka\PhpConsoleColor\ConsoleColor
     */
    protected $colors;

    /**
     * @param null $name
     */
    public function __construct($name = null)
    {
        parent::__construct();
        $this->colors = new ConsoleColor();
    }

    /**
     * fire
     *
     * @return mixed
     */
    abstract public function fire();

    /**
     * getApplication
     *
     * @return \Radic\App
     */
    public function getApplication()
    {
        return radic();
    }

    /**
     * execute
     *
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     * @return mixed
     */
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $method = method_exists($this, 'handle') ? 'handle' : 'fire';
        if ( ! $this->allowSudo and ! $this->requireSudo and radic()->hasRootAccess() )
        {
            $this->error('Cannot execute this command with root privileges');
            exit;
        }

        if ( $this->requireSudo and ! radic()->hasRootAccess() )
        {
            $this->error('This command requires root privileges');
            exit;
        }
        radic()->events->fire('command.firing', $this->name);
        $fire = $this->fire();
        radic()->events->fire('command.fired', $this->name);

        return $fire;
    }

    /**
     * style
     *
     * @param $styles
     * @param $str
     * @return string
     * @throws \JakubOnderka\PhpConsoleColor\InvalidStyleException
     */
    protected function style($styles, $str)
    {
        return $this->colors->apply($styles, $str);
    }

    /**
     * dump
     *
     * @param $var
     */
    protected function dump($var)
    {
        $this->getApplication()->dump($var);
    }

    /**
     * select
     *
     * @param       $question
     * @param array $choices
     * @param null  $default
     * @param null  $attempts
     * @param null  $multiple
     * @return int|string
     */
    public function select($question, array $choices, $default = null, $attempts = null, $multiple = null)
    {
        $question = $this->style([ 'bg_light_gray', 'dark_gray', 'bold' ], " $question ");
        if ( isset($default) )
        {
            $question .= $this->style(
                [ 'bg_dark_gray', 'light_gray' ],
                " [" . ($default === false ? 'y/N' : 'Y/n') . "] "
            );
        }

        $choice = $this->choice($question, $choices, $default, $attempts, $multiple);
        foreach ( $choices as $k => $v )
        {
            if ( $choice === $v )
            {
                return $k;
            }
        }
    }

    /**
     * arrayTable
     *
     * @param $arr
     */
    protected function arrayTable($arr)
    {

        $rows = [ ];
        foreach ( $arr as $key => $val )
        {
            if ( is_array($val) )
            {
                $val = print_r(array_slice($val, 0, 5), true);
            }
            $rows[ ] = [ (string)$key, (string)$val ];
        }
        $this->table([ 'Key', 'Value' ], $rows);
    }

    /**
     * confirm
     *
     * @param string $question
     * @param bool   $default
     * @return bool
     */
    public function confirm($question, $default = false)
    {
        $question = $this->style([ 'bg_light_gray', 'dark_gray', 'bold' ], " $question ");
        $question .= $this->style([ 'bg_dark_gray', 'light_gray' ], " [" . ($default === false ? 'y/N' : 'Y/n') . "] ");

        return parent::confirm($question, $default);
    }

    public function ask($question, $default = null)
    {
        $question = $this->style([ 'bg_light_gray', 'dark_gray', 'bold' ], " $question ");
        if ( isset($default) )
        {
            $question .= $this->style(['bg_dark_gray', 'light_gray'], " $default ");
        }

        return parent::ask($question, $default);
    }

    public function dots($message)
    {
    }
}