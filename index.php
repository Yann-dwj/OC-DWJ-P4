<?php

require('controller/IndexController.php');

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
        // var_dump($this->_lastUri);

        switch($this->_lastUri)
        {
            case "/" :
                (new IndexController())->home();
            break;

            case "/blog" :
                (new IndexController())->blog();
            break;

            case "/contact" :
                (new IndexController())->contact();
            break;
            /*
            default :
                (new IndexController())->home();
            */
        }
    }
}

// AUTOLOADER ...

function myAutoloader($class)
{
    if (file_exists('core/'.$class.'.php'))
    {
        include 'controller/'.$class.'.php';
    }
    elseif (file_exists('model/'.$class.'.php'))
    {
        include 'model/'.$class.'.php';
    }
    elseif (file_exists('core/'.$class.'.php'))
    {
        include 'model/'.$class.'.php';
    }
}

spl_autoload_register('myAutoloader');

new Router();