<?php

namespace Controller;

use \Model\PostManager;

class AdminController extends Controller
{
    public function dashboard()
    {
        if ($this->isAdmin())
        {
            $postManager = new PostManager;
            $posts = $postManager->getPosts();

            $view = new ViewController;
            $view->renderAdmin('dashboard', 'templateBackend', [
                'posts' => $posts
            ]);
        }
    }
}