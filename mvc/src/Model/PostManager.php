<?php
declare(strict_types = 1);
namespace OC\Model;

// La classe sera dans ce namespace
use OC\Model\Manager;
use OC\Model\Entity\Post;
use OC\Model\Entity\User;

// require_once("model/Manager.php"); // Vous n'alliez pas oublier cette ligne ? ;o)
class PostManager extends Manager
{

    public function getPosts()
    {
        
        $posts = array();
        
        try {
            $db = $this->dbConnect();
            $req = $db->query('SELECT mvc_post.id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS dateCreation,
                            mvc_user.id,mvc_user.user_name,user_email,user_role
                           FROM mvc_post LEFT JOIN mvc_user ON mvc_user.id = user_id ORDER BY creation_date DESC LIMIT 0, 5');
            
            $req->setFetchMode(\PDO::FETCH_ASSOC);
  
            // iterate throught result 
            while($post = $req->fetch()) {
                
                $post_line = array_slice($post,0,3); // first array with post details
                $author_line = array_slice($post,4); // second array with author details
                                
                $author = new User($author_line);
                $cur_post = new Post($post_line);
                $cur_post->setAuthor($author);
                
                $posts[] = $cur_post;
                
            }
            $req->closeCursor();
            
            
            
        } catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        
        
        
        return $posts;
    }

    public function getPost($postId)
    {
        
        try {
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creationDate FROM posts WHERE id = ?');
            $req->execute(array(
                $postId
                ));
            $post = $req->fetch();
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        return $post;
    }
}
