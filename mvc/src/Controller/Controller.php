<?php
/**
 * This is the Contoller
 *
 * This is the controller part of an MVC pattern
 *
 * @see Markdown
 *
 */
namespace OC\Controller;

// Chargement des classes
// require_once('model/PostManager.php');
// require_once('model/CommentManager.php');
use OC\Model\PostManager;
use OC\Model\CommentManager;

// Here __DIR__ is pathto/Controller
class Controller
{

    private $twig;

    public function __construct()
    {
        $loader = new \Twig_Loader_Filesystem(__DIR__ . '/../view/frontend/');
        $this->twig = new \Twig_Environment($loader, array(
            'cache' => __DIR__ . '/../../cache/',
            'debug' => true
        ));
    }

    public function listPosts()
    {
        $postManager = new PostManager();
        
        $commentManager = new CommentManager();
        $posts = $postManager->getPosts();
        // require( __DIR__.'/../view/frontend/listPostsView.php');
        
        $template = $this->twig->load('listPostsView.html');
        
        echo $template->render(array(
            'posts' => $posts,
            'title' => 'test'
        ));
    }

    public function post()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();
        
        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);
        
        $template = $this->twig->load('postView.html');
        
        echo $template->render(array(
            'post' => $post,
            'comments' => $comments
        ));
    }

    /**
     * Function retrieving the comment for edition
     */
    public function comment()
    {
        $commentManager = new CommentManager();
        
        $comment = $commentManager->getComment($_GET['id']);
        
        require (__DIR__ . '/../view/frontend/commentView.php');
    }

    public function addComment($postId, $author, $comment)
    {
        $commentManager = new CommentManager();
        
        $affectedLines = $commentManager->postComment($postId, $author, $comment);
        
        if ($affectedLines === false) {
            throw new Exception('Impossible d\'ajouter le commentaire !');
        } else {
            header('Location: index.php?action=post&id=' . $postId);
        }
    }
    
    
    /**
     * Adding post
     */
    public function addPost($values = null) {
        
        // No value submitted - no post data - we print the form
        if (null === $values) {
            
            $template = $this->twig->load('add_post.html');
            
            echo $template->render(array(
                'title' => 'Add an article now'
            ));
            
        }
        
    }
}
