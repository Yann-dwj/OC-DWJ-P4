<?php

namespace Controller;

class IndexController
{
    public function home()
    {
        require('view/frontend/home.php');
    }

    public function blog()
    {
        require('view/frontend/blog.php');
    }

    public function contact()
    {
        require('view/frontend/contact.php');
    }

    public function registration()
    {
        require('view/frontend/registration.php');
    }

    public function login()
    {
        require('view/frontend/login.php');
    }
}