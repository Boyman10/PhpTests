<?php
declare(strict_types = 1);
namespace OC\Controller;

use OC\Model\PostManager;
use OC\Model\CommentManager;
use OC\Model\UserManager;
use OC\Tools\SecurityUtilities;
use OC\Tools\Session;

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

    /**
     * Admin interface
     */
    public function admin()
    {
        
        $template = $this->twig->load('admin.twig');
        
        echo $template->render(array(
            "title" => 'Administrative interface'
        ));
    }
    
    /**
     * Login features - retrieving user
     */
    public function login($params = [])
    {
        if (isset($params['username']) && !empty($params['username']) && ! empty($params['pass']) ) {
            
            $userManager = new UserManager();
            $user = $userManager->getUserByIds($params);
            
            $securityTool = new SecurityUtilities();
            
            // check password
            if ($user && $securityTool->verifyPass($params['pass'], $user->getUserPass()))
            {
                // Adding an object to session :
                $_SESSION['user'] = $user;
                $_SESSION['flash'] = "Welcome back ".$user->getUserName()." !";
                
                header('Location: /mvc/index.php?action=listPosts');
                exit();
            } else {
                throw new \Exception("Sthg wrong with ids !");
            }
            
        } else {
            $template = $this->twig->load('login.twig');
            
            echo $template->render(array(
                "title" => 'Sign in'
            ));
        }
    }

    public function register($params)
    {
        if (! empty($params['username']) && ! empty($params['email']) && ! empty($params['pass']) && ! empty($params['conf'])) {
            
            if ($params['pass'] != $params['conf']) {
                throw new \Exception("Password don't match !!");
            } else {
                
                // First checking Google Recaptcha Success
                $securityTool = new SecurityUtilities();
                $securityTool->recaptchaCheck($params['g-recaptcha-response'], $_SERVER['REMOTE_ADDR']);
                
                $params['pass'] = $securityTool->hashPass($params['pass']);
                
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
                $nb = $postManager->addPost($params);
                
                $_SESSION['flash'] = "Post successfully added !";
                
                if ($nb > 0)
                {
                    header('Location: /mvc/index.php?action=listPosts');
                    exit();
                }
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