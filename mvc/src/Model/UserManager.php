<?php
declare(strict_types = 1);
namespace OC\Model;

use OC\Model\Manager;
use OC\Model\Entity\User;

class UserManager extends Manager
{
    
    public function getUserByIds($params)
    {
        
        try {
            $db = $this->dbConnect();
            $req = $db->prepare('SELECT * FROM mvc_user WHERE (user_name = ? OR user_email = ?) AND password = ?');
            
            $req->bindParam(1, $params['username'], PDO::PARAM_STR, 25);
            $req->bindParam(2, $params['username'], PDO::PARAM_STR, 25);
            $req->bindParam(2, $params['pass'], PDO::PARAM_STR, 120);
            
            $req->execute();
                        
            $req->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, "User");
            
            $user = $req->fetch();
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        return $user;
    }
    
    public function addUser($params)
    {
        
        
    }
    
}