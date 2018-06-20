<?php
namespace OC\Model;

/**
* This class manages the Database Connection
*/
class Manager
{
    /**
    * Gets instance of database connection
    *
    * @param no param
    * @return PDO Object
    */
    protected function dbConnect()
    {
        try {
        /** @var PDO $db contains the database connection. */
        $db = new \PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', 'debian');
        $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
        
        } catch (PDOException $e) {
            echo 'Connection error : ' . $e->getMessage();
        }
        
        return $db;
    }
}
