<?php
namespace OC\Test\Model;

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
        /** @var PDO $db contains the database connection. */
        $db = new \PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', 'debian');
        return $db;
    }
}