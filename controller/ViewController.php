<?php

namespace Controller;

class ViewController extends Controller
{
    public function render($view, $template, $vars=[])
    {
        ob_start();

        require('view/frontend/' . $view . '.php');

        $content = ob_get_clean();

        require('view/frontend/' . $template . '.php');
    }

    public function renderAdmin($view, $template, $vars=[])
    {
        ob_start();

        require('view/backend/' . $view . '.php');

        $content = ob_get_clean();

        require('view/backend/' . $template . '.php');
    }
}