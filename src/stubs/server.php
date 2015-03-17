<?php

if(isset($_SERVER['REQUEST_URI']))
{
    $uri = urldecode(
        parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)
    );
    if ( $uri !== '/' and file_exists(__DIR__ . '/public' . $uri) )
    {
        return false;
    }
}

define('RADIC_AS_LIB', true);
ob_start();
#include '/usr/local/bin/radic';
include '/mnt/safe/projects/gitter/bin/radic';
ob_end_clean();

print radic()->getVersion();
