<?php

$sep = DIRECTORY_SEPARATOR;
$dir = __DIR__;
$autoloader = "{$dir}{$sep}..{$sep}vendor{$sep}autoload.php";
require $autoloader;


$app = new \Radic\Cli\Foundation\Application(realpath(__DIR__.'/../'));


$app->singleton(
    \Illuminate\Contracts\Foundation\Application::class,
    \Radic\Cli\Foundation\Application::class
);

$app->singleton(
    \Illuminate\Contracts\Console\Kernel::class,
    \Radic\Cli\Foundation\Console\Kernel::class
);

$app->singleton(
    \Illuminate\Contracts\Debug\ExceptionHandler::class,
    \Radic\Cli\Exceptions\Handler::class
);

$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);

$status = $kernel->handle(
    $input = new \Symfony\Component\Console\Input\ArgvInput,
    new \Symfony\Component\Console\Output\ConsoleOutput
);


$kernel->terminate($input, $status);


exit($status);
