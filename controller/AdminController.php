<?php

namespace Controller;

use \Model\PostManager;
use \Model\Comment;
use \Model\CommentManager;

class AdminController extends Controller
{
    public function dashboard()
    {
        if ($this->isAdmin())
        {
            $postManager = new PostManager;
            $posts = $postManager->getPosts();

            $commentManager = new CommentManager;
            $reportedComments = $commentManager->getReportedComments();

            $view = new ViewController;
            $view->renderAdmin('dashboard', 'templateBackend', [
                'posts' => $posts,
                'reportedComments' => $reportedComments
            ]);

            // Controle commentaires signalés
            if (!empty($_GET['comment']) && !empty($_GET['action']))
            {
                if ($_GET['action'] == 'delete')
                {
                    $comment = new Comment([
                        'id' => $_GET['comment']
                    ]);
                    
                    $commentManager->deleteComment($comment);
                }

                if ($_GET['action'] == 'validate')
                {
                    $comment = new Comment([
                        'id' => $_GET['comment']
                    ]);
                    
                    $commentManager->validateComment($comment);
                }

                // header('Location: /dashboard');
            }
        }
    }
}