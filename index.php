<?php

use \Controller\IndexController;

class Router
{
    private $_lastUri;

    public function __construct()
    {
        $this->getPathUrl();
        $this->callAction();
    }

    private function getPathUrl()
    {
        $request_uri = explode('?', $_SERVER['REQUEST_URI'], 2);
        
        $this->_lastUri = $request_uri[0];
    }

    private function callAction()
    {
        session_start();

        switch($this->_lastUri)
        {
            case "/" :
                (new IndexController())->home();
            break;

            case "/blog" :
                (new IndexController())->blog();
            break;

            case "/post" :
                (new IndexController())->post();
            break;

            case "/contact" :
                (new IndexController())->contact();
            break;

            case "/registration" :
                (new IndexController())->registration();
            break;

            case "/login" :
                (new IndexController())->login();
                (new AdminController())->registration();
            break;

            case "/logout" :
                (new IndexController())->logout();
            break;
        }
    }
}

// AUTOLOADER ...

function myAutoloader($class)
{
    $file_position = strrpos($class, '\\');
    if($file_position === false)
    {
        return;
    }

    $ds = DIRECTORY_SEPARATOR;
    $path = str_replace('\\', $ds, strtolower(substr($class, 0, $file_position + 1)));
    $file = $path . substr($class, $file_position + 1) . '.php';

    if(file_exists($file))
    {
        require_once($file);
    }
}

spl_autoload_register('myAutoloader');

new Router();