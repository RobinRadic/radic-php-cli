<?php
/**
 * Part of the Radic packages.
 */
namespace Radic\Console;



abstract class Command extends \Sebwite\Support\Console\Command
{

    public function __construct()
    {
        $this->setLaravel(app());
        parent::__construct();
        #User::i
    }




}
