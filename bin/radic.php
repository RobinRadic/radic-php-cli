#!/usr/bin/env php
<?php

require __DIR__.'/../vendor/autoload.php';

use Radic\GitCommand;
use Symfony\Component\Console\Application;

$application = new Application('RadicGitter', '@package_version@');
$application->add(new GitCommand());
$application->run();
