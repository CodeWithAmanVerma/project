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
        $controllerName = sprintf("%s%s", ucfirst(strtolower($this->request->controller)), "Controller");
        $controllerFile = sprintf("%s/app/Controllers/%s.php", APP_PATH, $controllerName);
        if(file_exists($controllerFile)){
            require $controllerFile;
        }else{
            // throw new \Exception('Exception message');
            http_response_code(404);
            $controllerName = 'ErrorController';
            require APP_PATH . "/app/Controllers/{$controllerName}.php";
            $this->request->action = '_404';
        }
        
        $controller = new $controllerName();
        return $controller;
    }

}