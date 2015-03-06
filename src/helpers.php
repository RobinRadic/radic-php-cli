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
