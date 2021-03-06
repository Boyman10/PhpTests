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
            $req = $db->prepare('SELECT * FROM mvc_user WHERE (user_name = ? OR user_email = ?)');
            
            $req->bindParam(1, $params['username'], \PDO::PARAM_STR, 25);
            $req->bindParam(2, $params['username'], \PDO::PARAM_STR, 25);
            
            $req->execute();
                        
            $req->setFetchMode(\PDO::FETCH_CLASS|\PDO::FETCH_PROPS_LATE, User::class);
            
            $user = $req->fetch();
            
        }
        catch (PDOException $e) {
            echo "Error: " . $e->getMessage();
        }
        
        return $user;
    }
    
    /**
     * Adding user to DB 
     * @return $affectedLines
     */
    public function addUser($params)
    {
        $affectedLines = 0;
        
        try {
            $db = $this->dbConnect();
            
            $user = $db->prepare('INSERT INTO mvc_user(user_name, user_email, date_created, user_role, user_pass) 
                                    VALUES(?, ?, NOW(), "ROLE_USER",?)');
            $affectedLines = $user->execute(array($params['username'], $params['email'], $params['pass']));
        
        }
        catch (\PDOException $e) {
            $_SESSION['flash'] = "Error : ". $e->getMessage();

        }
        
        return $affectedLines;
        
    }
    
}