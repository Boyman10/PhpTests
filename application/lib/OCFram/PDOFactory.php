<?php
namespace OCFram;

class PDOFactory
{
  public static function getMysqlConnexion()
  {
    $db = new \PDO('mysql:host=localhost;dbname=test', 'test', 'debian');
    $db->setAttribute(\PDO::ATTR_ERRMODE, \PDO::ERRMODE_EXCEPTION);
    
    return $db;
  }
}