<?php
declare(strict_types = 1);
namespace OC\Controller;

use OC\Model\PostManager;
use OC\Model\CommentManager;
use OC\Model\UserManager;
use OC\Tools\SecurityUtilities;

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
        if (! empty($params['username']) && ! empty($params['email']) && ! empty($params['pass']) && ! empty($params['conf'])) {
            
            if ($params['pass'] != $params['conf']) {
                throw new \Exception("Password don't match !!");
            } else {
                // Treat the form here :
                $userManager = new UserManager();
                $nb = $userManager->addUser($params);
            
                $_SESSION['flash'] = "User successfully added !";
                
                if ($nb > 0) 
                {
                    header('Location: /mvc/index.php?action=listPosts');
                    exit();
                }
            }
            
        } 
            
        $template = $this->twig->load('register.twig');
        
        echo $template->render(array(
            "title" => 'Register'
        ));
        
    }

    /**
     * Adding post entry here
     */
    public function addPost($params)
    {
        if (! empty($params['title']) && ! empty($params['content']) && ! empty($params['token'])) {
            
            if ($params['token'] != $_SESSION['token']) {
                throw new \Exception("Token invalid !!");
            } else {
                // Treat the form here :
                $postManager = new PostManager();
                addPost($params);
            }
        } else {
            
            $securityTool = new SecurityUtilities();
            $securityTool->generateToken();
            $token = $securityTool->getToken();
            $_SESSION['token'] = $token;
            
            $template = $this->twig->load('add-post.twig');
            
            echo $template->render(array(
                "title" => 'Add post',
                "token" => $token
            ));
        }
    }
}