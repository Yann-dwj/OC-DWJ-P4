<?php

namespace Controller;

use \Model\Post;
use \Model\PostManager;
use \Model\Comment;
use \Model\CommentManager;
use \Model\User;
use \Model\UserManager;

class AdminController extends Controller
{
    public function dashboard()
    {
        if ($this->isAdmin())
        {
            $postManager = new PostManager;
            $posts = $postManager->getPosts();
            $numberPosts = count($posts);

            $commentManager = new CommentManager;
            $reportedComments = $commentManager->getReportedComments();
            $numberReportedComments = count($reportedComments);

            $comments = $commentManager->getAllComments();
            $numberComments = count($comments);
            
            // $commentsPost = $commentManager->getComments($_GET['id']);
            // $numberCommentsPost = count($commentsPost);

            $userManager = new UserManager;
            $users = $userManager->getUsers();
            $numberUsers = count($users);


            $view = new ViewController;
            $view->renderAdmin('dashboard', 'templateBackend', [
                'posts' => $posts,
                'numberPosts' => $numberPosts,
                'reportedComments' => $reportedComments,
                'numberReportedComments' => $numberReportedComments,
                'numberComments' => $numberComments,
                // 'numberCommentsPost' => $numberCommentsPost,
                'users' => $users,
                'numberUsers' => $numberUsers
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

            // Ajout d'un post
            if (isset($_POST) && isset($_POST['post']))
            {
                $target_dir = "public/images/";
                $target_file = $target_dir . basename($_FILES["imageUrl"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                $check = getimagesize($_FILES["imageUrl"]["tmp_name"]);

                if($check !== false)
                {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } 
                else
                {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }

                if (move_uploaded_file($_FILES["imageUrl"]["tmp_name"], $target_file))
                {
                    echo "The file ". basename( $_FILES["imageUrl"]["name"]). " has been uploaded.";
                }
                else
                {
                    echo "Sorry, there was an error uploading your file.";
                }

                $post = new Post([
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'author' => $_POST['author'],
                    'imageUrl' => basename( $_FILES["imageUrl"]["name"])
                ]);
    
                $postManager->addPost($post);
            }

            // Controle articles
            if (!empty($_GET['post']) && !empty($_GET['action']))
            {
                if ($_GET['action'] == 'delete')
                {
                    $post = new Post([
                        'id' => $_GET['post']
                    ]);
                    
                    $postManager->deletePost($post);
                }
            }

            // Controle utilisateur
            if (!empty($_GET['user']) && !empty($_GET['action']))
            {
                if ($_GET['action'] == 'delete')
                {
                    $user = new User([
                        'id' => $_GET['user']
                    ]);
                    
                    $userManager->deleteUser($user);
                }
            }

        }
    }

    public function editPost()
    {
        if ($this->isAdmin())
        {
            $postManager = new PostManager;
            $post = $postManager->getPost($_GET['id']);

            $view = new ViewController;
            $view->renderAdmin('editPost', 'templateBackend', [
                'post' => $post
            ]);
    
            if (isset($_POST) && isset($_POST['edit']))
            {
                $target_dir = "public/images/";
                $target_file = $target_dir . basename($_FILES["imageUrl"]["name"]);
                $uploadOk = 1;
                $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                
                $check = getimagesize($_FILES["imageUrl"]["tmp_name"]);

                if($check !== false)
                {
                    echo "File is an image - " . $check["mime"] . ".";
                    $uploadOk = 1;
                } 
                else
                {
                    echo "File is not an image.";
                    $uploadOk = 0;
                }

                if (move_uploaded_file($_FILES["imageUrl"]["tmp_name"], $target_file))
                {
                    echo "The file ". basename( $_FILES["imageUrl"]["name"]). " has been uploaded.";
                }
                else
                {
                    echo "Sorry, there was an error uploading your file.";
                }

                $post = new Post([
                    'id' => $_GET['id'],
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'author' => $_POST['author'],
                    'imageUrl' => basename( $_FILES["imageUrl"]["name"])
                ]);
    
                $postManager->updatePost($post);
            }
        }
    }
}