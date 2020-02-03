<?php

namespace Controller;

class IndexController
{
    public function home()
    {
        require('view/frontend/homeFrontend.php');
    }

    public function blog()
    {
        require('view/frontend/blogFrontend.php');
    }

    public function contact()
    {
        require('view/frontend/contactFrontend.php');
    }
}