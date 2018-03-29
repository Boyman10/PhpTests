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
//require_once('model/PostManager.php');
//require_once('model/CommentManager.php');

use OC\Model\PostManager;
use OC\Model\CommentManager;

// Here __DIR__ is pathto/Controller

class Controller {

    public function listPosts()
    {
        $postManager = new PostManager();

        $commentManager = new CommentManager();
        $posts = $postManager->getPosts();
        require( __DIR__.'/../view/frontend/listPostsView.php');
    }

    public function post()
    {
        $postManager = new PostManager();
        $commentManager = new CommentManager();

        $post = $postManager->getPost($_GET['id']);
        $comments = $commentManager->getComments($_GET['id']);

        require(__DIR__.'/../view/frontend/postView.php');
    }
    /**
    * Function retrieving the comment for edition
    */
    public function comment()
    {
        $commentManager = new CommentManager();

        $comment = $commentManager->getComment($_GET['id']);

        require(__DIR__.'/../view/frontend/commentView.php');
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
}
