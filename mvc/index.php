<?php
/**
 * This is the router
 *
 * @version 1.0.0 Blog
 * @author eddy
 * @since 1.0.0 introduced
 */

session_start();

// https://github.com/phpDocumentor/fig-standards/blob/master/proposed/phpdoc.md

// Composer autoloader :
require_once("vendor/autoload.php");

//require('Controller/frontend.php');

use OC\Controller;

$controller = new Controller\Controller();
$backController = new Controller\BackController();


try { // On essaie de faire des choses
    

    if (isset($_GET['action'])) {
        
        /**
         * FRONTEND
         */
        if ($_GET['action'] == 'listPosts') {
            $controller->listPosts();
        } elseif ($_GET['action'] == 'post') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $controller->post();
            } else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } elseif ($_GET['action'] == 'comment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                $controller->comment();// don t need parameter - it's handled within the model
            } else {
                // Erreur ! On arrête tout, on envoie une exception, donc au saute directement au catch
                throw new Exception('Aucun identifiant de commentaire envoyé');
            }
        } elseif ($_GET['action'] == 'addComment') {
            if (isset($_GET['id']) && $_GET['id'] > 0) {
                if (!empty($_POST['author']) && !empty($_POST['comment'])) {
                    $controller->addComment($_GET['id'], $_POST['author'], $_POST['comment']);
                } else {
                    // Autre exception
                    throw new Exception('Tous les champs ne sont pas remplis !');
                }
            } else {
                // Autre exception
                throw new Exception('Aucun identifiant de billet envoyé');
            }
        } 
        elseif($_GET['action'] == 'login') 
        {
            // Case session already set :
            if (isset($_SESSION['user'])) {
                
                $backController->admin();
            } elseif(!empty($_POST['username']) && !empty($_POST['pass'])) {
                
                // Treat the login form here :
                
            } else {
                $backController->login();
            }
            
            
        } 
        elseif ($_GET['action'] == 'register')
        {
            // Case session already set :
            if (isset($_SESSION['user'])) {
                
                $backController->admin();
                
            } else {
                $backController->register($_POST);
            }           
            
        }
        /**
         * BACKEND
         */
        elseif ($_GET['action'] == 'addpost') {
            
            // Check session parameter @TODO
            if (!empty($_POST['token']) && !empty($_POST['content']) && !empty($_POST['title'])) {
                
                $backController->addPost($_POST);
                
            } else {
                // print the form here
                $backController->addPost();
            }
        }
        
        
        
    } else {
        $controller->listPosts();
    }
} catch (Exception $e) { // S'il y a eu une erreur, alors...
    echo 'Erreur : ' . $e->getMessage();
}

unset($_SESSION['flash']);

