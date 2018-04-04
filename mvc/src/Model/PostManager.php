<?php
namespace OC\Model;

// La classe sera dans ce namespace
use OC\Model\Manager;

// require_once("model/Manager.php"); // Vous n'alliez pas oublier cette ligne ? ;o)
class PostManager extends Manager
{

    public function getPosts()
    {
        $db = $this->dbConnect();
        $req = $db->query('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creationDate
                           FROM posts ORDER BY creation_date DESC LIMIT 0, 5');
        
        $req->setFetchMode(\PDO::FETCH_CLASS | \PDO::FETCH_PROPS_LATE, 'OC\Model\Entity\Post');
        
        $posts = $req->fetchAll();
        
        foreach($posts as $value) {
            
            echo $value->title.'<br/>';    
        }
        exit;
        
        $req->closeCursor();
        
        return $posts;
    }

    public function getPost($postId)
    {
        $db = $this->dbConnect();
        $req = $db->prepare('SELECT id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS creationDate FROM posts WHERE id = ?');
        $req->execute(array(
            $postId
        ));
        $post = $req->fetch();
        
        return $post;
    }
}
