<?php
declare(strict_types = 1);
namespace OC\Model;

// La classe sera dans ce namespace
use OC\Model\Manager;
use OC\Model\Entity\Post;
use OC\Model\Entity\User;
use OC\Tools\Session;

// require_once("model/Manager.php"); // Vous n'alliez pas oublier cette ligne ? ;o)
class PostManager extends Manager
{

    public function getPosts()
    {
        
        $posts = array();
        
        try {
            $db = $this->dbConnect();
            $req = $db->query('SELECT mvc_post.id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS dateCreation,
                            mvc_user.id as uid,user_name,user_email,user_role
                           FROM mvc_post LEFT JOIN mvc_user ON mvc_user.id = user_id ORDER BY creation_date DESC LIMIT 0, 5');
            
            $req->setFetchMode(\PDO::FETCH_ASSOC);
  
            // iterate throught result 
            while($post = $req->fetch()) {
                
                $post_line = ["id" => $post['id'], "title" => $post['title'], "content" => $post['content'], "dateCreation" => $post['dateCreation']]; // first array with post details
                $author_line = ["id" => (int) $post['uid'], "user_name" => $post['user_name'], "user_email" => $post['user_email'], "user_role" => $post['user_role']]; // second array with author details
                                
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
    
    /**
     * @TODO TO BE TESTED
     */
    public function getList($debut = -1, $limite = -1)
    {
        $sql = 'SELECT id, auteur, titre, contenu, dateAjout, dateModif FROM news ORDER BY id DESC';
        
        // On vérifie l'intégrité des paramètres fournis.
        if ($debut != -1 || $limite != -1)
        {
            $sql .= ' LIMIT '.(int) $limite.' OFFSET '.(int) $debut;
        }
        
        $requete = $this->db->query($sql);
        $requete->setFetchMode(PDO::FETCH_CLASS | PDO::FETCH_PROPS_LATE, 'News');
        
        $listeNews = $requete->fetchAll();
        
        // On parcourt notre liste de news pour pouvoir placer des instances de DateTime en guise de dates d'ajout et de modification.
        foreach ($listeNews as $news)
        {
            $news->setDateAjout(new DateTime($news->dateAjout()));
            $news->setDateModif(new DateTime($news->dateModif()));
        }
        
        $requete->closeCursor();
        
        return $listeNews;
    }

    public function getPost($postId)
    {
        
        try {
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT mvc_post.id, title, content, DATE_FORMAT(creation_date, \'%d/%m/%Y à %Hh%imin%ss\') AS dateCreation,
                            mvc_user.id as uid,user_name,user_email,user_role
                           FROM mvc_post LEFT JOIN mvc_user ON mvc_user.id = user_id WHERE mvc_post.id = :pid');
            
            $req->bindValue(':pid', (int) $postId, \PDO::PARAM_INT);
            $req->setFetchMode(\PDO::FETCH_ASSOC);
            $req->execute();
            
            $post = $req->fetch();
            
            // Object mapping :
            $post_line = ["id" => $post['id'], "title" => $post['title'], "content" => $post['content'], "dateCreation" => $post['dateCreation']]; // first array with post details
            $author_line = ["id" => (int) $post['uid'], "user_name" => $post['user_name'], "user_email" => $post['user_email'], "user_role" => $post['user_role']]; // second array with author details
            
            $author = new User($author_line);
            $cur_post = new Post($post_line);
            $cur_post->setAuthor($author);
            
            $post = $cur_post;
            
            $req->closeCursor();
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        return $post;
    }
    
    /**
     * Adding post to DB
     * @return $affectedLines
     */
    public function addPost($params)
    {
        $affectedLines = 0;
        
        try {
            $db = $this->dbConnect();
            
            Session::start();
                        
            $post = $db->prepare('INSERT INTO mvc_post(user_id, title, content, creation_date)
                                    VALUES(:uid, :title, :content, NOW())');
            $post->bindValue(':uid', (Session::get('user'))->getId(), \PDO::PARAM_INT);
            $post->bindValue(':title', $params['title'], \PDO::PARAM_STR);
            $post->bindValue(':content',  $params['content'], \PDO::PARAM_STR);
            
            $affectedLines = $post->execute();
            
        }
        catch (\PDOException $e) {
            $_SESSION['flash'] = "Error : ". $e->getMessage();
            
        }

        return $affectedLines;
        
    }
}
