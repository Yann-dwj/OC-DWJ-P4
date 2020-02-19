<?php

namespace Controller;

class Controller
{
    protected function isConnect()
    {
        if (isset($_SESSION) && array_key_exists('pseudo', $_SESSION))
        {
            return true;
        }
        else
        {
            return false;
        }
    }

    protected function isAdmin()
    {
        if (isset($_SESSION) && array_key_exists('isAdmin', $_SESSION) && $_SESSION['isAdmin'])
        {
            return true;
        }
        else
        {
            return false;
        }
    }
}