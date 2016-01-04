<?php

define('LARAVEL_START', microtime(true));

$sep = DIRECTORY_SEPARATOR;
$dir = __DIR__;
$autoloader = "{$dir}{$sep}..{$sep}vendor{$sep}autoload.php";
require $autoloader;


$app = new \Radic\Foundation\Application(realpath(__DIR__.'/../'));

$app->singleton(
    \Illuminate\Contracts\Console\Kernel::class,
    \Radic\Foundation\Console\Kernel::class
);

$app->singleton(
    \Illuminate\Contracts\Debug\ExceptionHandler::class,
    \Radic\Exceptions\Handler::class
);

$kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);

$status = $kernel->handle(
    $input = new \Symfony\Component\Console\Input\ArgvInput,
    new \Symfony\Component\Console\Output\ConsoleOutput
);


$kernel->terminate($input, $status);


exit($status);
