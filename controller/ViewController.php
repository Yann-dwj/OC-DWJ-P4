<?php

namespace Controller;

class ViewController
{
    public function render($view, $template, $vars=[])
    {
        ob_start();

        require('view/frontend/' . $view . '.php');

        $content = ob_get_clean();

        require('view/frontend/' . $template . '.php');
    }
}