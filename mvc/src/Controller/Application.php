<?php

namespace OC\Controller;

use OC\Tools\Session;

/**
 * This is the main class handling default methods for the controllers
 *
 * @see Markdown
 *
 */
abstract class Application
{

    protected $twig;

    public function __construct($backoffice = null)
    {
        if (isset($backoffice))
            $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../view/backend/');
        else
            $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../view/frontend/');
        
        $this->twig = new \Twig_Environment($loader, array(
            'cache' => __DIR__ . '/../../cache/',
            'debug' => true
        ));
        
        Session::start();
        
        $this->twig->addGlobal('session', $_SESSION);
    }

}
