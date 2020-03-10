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
            $section = null;
            $message = null;

            $postManager = new PostManager;
            $posts = $postManager->getPosts();
            $numberPosts = count($posts);

            $commentManager = new CommentManager;
            $reportedComments = $commentManager->getReportedComments();
            $numberReportedComments = count($reportedComments);

            $comments = $commentManager->getAllComments();
            $numberComments = count($comments);

            $userManager = new UserManager;
            $users = $userManager->getUsers();
            $numberUsers = count($users);

            // Ajout post
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

                $section = "Nouvel Article";
                $message = 'L\'article a bien été ajouté';
            }

            // Supression post
            if (!empty($_GET['post']) && !empty($_GET['action']))
            {
                if ($_GET['action'] == 'delete')
                {
                    $post = new Post([
                        'id' => $_GET['post']
                    ]);
                    
                    $postManager->deletePost($post);

                    $section = "Articles";
                    $message = 'L\'article a bien été supprimé';
                }
            }

            // Supression ou validation commentaires signalés
            if (!empty($_GET['comment']) && !empty($_GET['action']))
            {
                if ($_GET['action'] == 'delete')
                {
                    $comment = new Comment([
                        'id' => $_GET['comment']
                    ]);
                    
                    $commentManager->deleteComment($comment);

                    $section = "Commentaires Signalés";
                    $message = 'Le commentaire a bien été supprimé';
                }

                if ($_GET['action'] == 'validate')
                {
                    $comment = new Comment([
                        'id' => $_GET['comment']
                    ]);
                    
                    $commentManager->validateComment($comment);

                    $section = "Commentaires Signalés";
                    $message = 'Le commentaire a bien été validé';
                }
            }

            // Supression utilisateur
            if (!empty($_GET['user']) && !empty($_GET['action']))
            {
                if ($_GET['action'] == 'delete')
                {
                    $user = new User([
                        'id' => $_GET['user']
                    ]);
                    
                    $userManager->deleteUser($user);

                    $section = "Utilisateurs";
                    $message = 'L\'utilisateur a bien été supprimé de l\'espace membre';
                }
            }

            $view = new ViewController;
            $view->renderAdmin('dashboard', 'templateBackend', [
                'posts' => $posts,
                'numberPosts' => $numberPosts,
                'reportedComments' => $reportedComments,
                'numberReportedComments' => $numberReportedComments,
                'numberComments' => $numberComments,
                'users' => $users,
                'numberUsers' => $numberUsers,
                'section' => $section,
                'message' => $message
            ]);
        }
    }

    public function editPost()
    {
        if ($this->isAdmin())
        {
            $message = null;

            $postManager = new PostManager;
            $post = $postManager->getPost($_GET['id']);
    
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

                $post = new Post([
                    'id' => $_GET['id'],
                    'title' => $_POST['title'],
                    'content' => $_POST['content'],
                    'author' => $_POST['author'],
                    'imageUrl' => basename( $_FILES["imageUrl"]["name"])
                ]);
    
                $postManager->updatePost($post);

                $message = 'L\'article a été modifié avec succès';
            }

            $view = new ViewController;
            $view->renderAdmin('editPost', 'templateBackend', [
                'post' => $post,
                'message' => $message
            ]);
        }
    }
}