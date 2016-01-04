<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Cli\Console;



use Radic\Cli\Foundation\Auth\User;

abstract class Command extends \Sebwite\Support\Command
{

    public function __construct()
    {
        $this->setLaravel(app());
        parent::__construct();
        #User::i
    }

}
