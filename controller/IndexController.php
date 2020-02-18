<?php

namespace Controller;

use \Model\Comment;
use \Model\CommentManager;
use \Model\Post;
use \Model\PostManager;
use \Model\User;
use \Model\UserManager;

class IndexController extends Controller
{
    public function home()
    {
        $view = new ViewController;
        $view->render('home', 'templateFrontend', [
            'message' => 'coucou'
        ]);
    }

    public function blog()
    {
        $postManager = new PostManager;
        $posts = $postManager->getPosts();

        $view = new ViewController;
        $view->render('blog', 'templateFrontend', [
            'posts' => $posts
        ]);
    }

    public function post()
    {

        
        if(isset($_GET['id']) && $_GET['id'] > 0 )
        {
            $postManager = new PostManager;
            $post = $postManager->getPost($_GET['id']);
    
            $commentManager = new CommentManager;
            $comments = $commentManager->getComments($_GET['id']);
        }
        else
        {
            throw new \Throwable('aucun identifiant de billet envoyé');
        }
        
        if (isset($_POST) && isset($_POST['comment']))
        {
        
            $comment = new Comment([
                'postId' => $_GET['id'],
                'author' => $_SESSION['pseudo'],
                'comment' => $_POST['comment']
            ]);

            $commentManager->addComment($comment);
        }

        $view = new ViewController;
        $view->render('post', 'templateFrontend', [
            'post' => $post,
            'comments' => $comments
        ]);
    }

    public function contact()
    {
        $view = new ViewController;
        $view->render('contact', 'templateFrontend');
    }

    public function registration()
    {
        $error = null;
        $success = null;

        if (isset($_POST['submit'])) // Si le formulaire est envoyé
        {
            $userManager = new UserManager;

            if (empty($userManager->checkPseudo($_POST['pseudo']))) // Si le pseudo n'est pas en BDD
            {
                if (empty($userManager->checkEmail($_POST['email'])))
                {
                    if (preg_match('#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#', $_POST['email'])) // Si le mail à le bon format
                    {
                        if (preg_match('#^(?=.*[a-z])(?=.*[A-Z])(?=.*[0-9])(?=.*\W){8,12}#', $_POST['password']))
                        {
                            if ($_POST['password'] == $_POST['passwordConfirm']) // Si les deux mots de passe sont identiques
                            {
                                $passHash = password_hash($_POST['password'], PASSWORD_DEFAULT);

                                $user = new User([
                                    'pseudo' => $_POST['pseudo'],
                                    'email' => $_POST['email'],
                                    'pass' => $passHash
                                ]);
                    
                                $userManager->addUser($user);

                                $success = 'Félicitation, votre compte à bien été enregistré !'; 
                            }
                            else
                            {
                                $error = 'Les mots de passes ne correspondent pas';
                            }  
                        }
                        else
                        {
                            $error = 'Mot de passe invalide, veuillez respecter la chaine demandée';
                        }
                    }
                    else
                    {
                        $error = 'Format de mail incorrect';
                    }
                }
                else
                {
                    $error = 'Il existe déja un compte pour cette adresse e-mail';
                }   
            }
            else
            {
                $error = 'Ce pseudo n\'est pas disponnible';
            }
        }

        $view = new ViewController;
        $view->render('registration', 'templateFrontend', [
            'error' => $error,
            'success' => $success
        ]);
    }

    public function login()
    {
        $error = null;

        if (isset($_POST['submit']))
        {
            $userManager = new UserManager;
            $user = $userManager->getUser($_POST['email']);

            if ($user)
            {
                $passVerify = password_verify($_POST['password'], $user->pass());

                if ($passVerify)
                {
                    session_start();
                    $_SESSION['pseudo'] = $user->pseudo();
                    $_SESSION['isAdmin'] = $user->isAdmin();
                    header('Location: /');
                }
                else
                {
                    $error = 'Erreur d\'identifiant';
                }
            }
            else
            {
                $error = 'Erreur d\'identifiant';
            }
        }

        $view = new ViewController;
        $view->render('login', 'templateFrontend', [
            'error' => $error
        ]);
    }

    public function logout()
    {
        if (isset($_POST))
        {
            if (isset($_POST['submit']))
            {
                session_start();
                unset($_SESSION);
                session_destroy();
                header('Location: /');
            }
        }
        $view = new ViewController;
        $view->render('logout', 'templateFrontend');
    }
}