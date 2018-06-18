<?php

namespace OC\Controller;

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
    }

}
