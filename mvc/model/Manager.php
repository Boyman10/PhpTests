<?php
namespace model;

class Manager
{
    protected function dbConnect()
    {
        $db = new \PDO('mysql:host=localhost;dbname=test;charset=utf8', 'test', '1234');
        return $db;
    }
}