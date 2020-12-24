<?php

class Router
{

    static public function parse($url, $request)
    {
        $url = trim($url);

        if ($url == "/") {
            $request->controller = "Main";
            $request->action = "index";
            $request->params = [];
        } else {
            $explode_url = explode('/', $url);
            $explode_url = array_slice($explode_url, 1);
            $request->controller = $explode_url[0];
            $request->action = (!empty($explode_url[1])) ? $explode_url[1] : 'index';
            $request->params = (!empty($explode_url[1])) ? array_slice($explode_url, 1) : [];
        }
    }
}
