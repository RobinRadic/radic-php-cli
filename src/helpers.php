<?php

if ( ! function_exists('radic') )
{
    /**
     * @return \Radic\App;
     */
    function radic($var = null)
    {
        global $app;
        $radic = $app;
        return $var === null ? $radic : $radic->make($var);
    }
}


if ( ! function_exists('path_join') )
{
    /**
     * @param string $paths,... the paths
     * @return string;
     */
    function path_join()
    {
        return \Radic\Path::join(func_get_args());
    }
}


function storage_path(){
    return radic('path.storage');
}
function base_path(){
    return radic('path.base');
}
function home_path(){
    return radic('path.home');
}
function app_path(){
    return radic('path.app');
}
function vendor_path(){
    return radic('path.vendor');
}
