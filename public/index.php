<?php
    /**
     * PHP - Demo Application
     *
     * @author   Aman Verma <amanverma97@gmail.com>
     */

    /** 
     * Declare the constants used 
     */

    define('APP_PATH', dirname(__DIR__));
    define('PUBLIC_PATH', __DIR__);
    
    
    /** 
     * Loading third-party packages 
     */
    
    require APP_PATH.'/config/autoload.php';
    
    /** 
     * Loading environment file for configuration 
     */

    $dotenv = Dotenv\Dotenv::createImmutable(APP_PATH);
    $dotenv->load();

    /** 
     * Web path of the project 
     */
    
    define('WEB_PATH', $_ENV['APP_PATH']);

    /** 
     * Loading core config 
     */

    require APP_PATH.'/config/core.php'; 

    /** 
     * Loading router 
     */
    require APP_PATH . '/router.php';
    require APP_PATH . '/request.php';
    require APP_PATH . '/dispatcher.php';
    
    try {
        $dispatch = new Dispatcher();
        $dispatch->dispatch();
    } catch (\Exception $e) {
        echo $e->getMessage();
    }