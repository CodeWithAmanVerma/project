<?php

/**
 * ASSET PATH
 * 
 * This will give you full web path 
 */

function asset_path($path = "", $echo = true, $folder = "assets")
{
    if($echo){
        echo WEB_PATH . "/{$folder}/{$path}";return;
    }else{
        return WEB_PATH . "/{$folder}/{$path}";
    }
}

/**
 * ASSET PATH
 * 
 * This will give you full web path 
 */

function url($path = "", $echo = true)
{
    $url = "";
    /* if(preg_match('^https?://', $path)){
        $url = strtolower($path); 
    }else if(preg_match('^www', $path)){
        $url = sprintf("%s%s", "http://", strtolower($path)); 
    }else */{
        $url = sprintf("%s%s", WEB_PATH, $path);
    }

    if($echo){
        echo $url; return;
    }else{
        return $url;
    }
}