<?php 
/**
* This is the Contoller
*
* This is the controller part of an MVC pattern
*
* @see Markdown
*
*/


// Chargement des classes
require_once('model/PostManager.php');
require_once('model/CommentManager.php');

use \OC\Test\Model\PostManager;
use \OC\Test\Model\CommentManager;

function listPosts()
{
    $postManager = new PostManager();

    $commentManager = new CommentManager();
    $posts = $postManager->getPosts();
    require('view/frontend/listPostsView.php');
}

function post()
{
    $postManager = new PostManager();
    $commentManager = new CommentManager();

    $post = $postManager->getPost($_GET['id']);
    $comments = $commentManager->getComments($_GET['id']);

    require('view/frontend/postView.php');
}
/**
* Function retrieving the comment for edition
*/
function comment()
{
    $commentManager = new CommentManager();

    $comment = $commentManager->getComment($_GET['id']);

    require('view/frontend/commentView.php');
}

function addComment($postId, $author, $comment)
{
    $commentManager = new CommentManager();

    $affectedLines = $commentManager->postComment($postId, $author, $comment);

    if ($affectedLines === false) {
        throw new Exception('Impossible d\'ajouter le commentaire !');
    } else {
        header('Location: index.php?action=post&id=' . $postId);
    }
}
