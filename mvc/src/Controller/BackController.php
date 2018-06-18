<?php
namespace OC\Controller;

use OC\Model\PostManager;
use OC\Model\CommentManager;

/**
 * This is the Contoller for the backoffice
 *
 * @see MVC pattern
 *     
 *     
 */
class BackController extends Application
{

    public function __construct()
    {
        parent::__construct(1);
    }

    public function login()
    {
        $template = $this->twig->load('login.twig');
        
        echo $template->render(array(
            "title" => 'Sign in'
        ));
    }

    public function register($params)
    {
        if (! empty($params['username'] && ! empty($params['email'] 
            && ! empty($params['pass'] && ! empty($params['conf'] 
                && ! empty($params['token'])))))) {
                    
                    // Treat the form here :
                    $userManager = new UserManager();
                    addUser($params);
                    
                } else {
                
                    $template = $this->twig->load('register.twig');
            
                    echo $template->render(array(
                        "title" => 'Register'
                        ));
        }
    }
}