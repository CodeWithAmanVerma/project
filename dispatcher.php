<?php

class Dispatcher
{

    private $request;

    public function dispatch()
    {
        $this->request = new Request();
        Router::parse($this->request->url, $this->request);

        $controller = $this->loadController();

        call_user_func_array([$controller, $this->request->action], $this->request->params);
    }

    public function loadController()
    {
        $controllerName = ucfirst(strtolower($this->request->controller)) . "Controller";
        $file = APP_PATH . '/app/Controllers/' . $controllerName . '.php';
        
        require $file;
        
        $controller = new $controllerName();
        return $controller;
    }

}