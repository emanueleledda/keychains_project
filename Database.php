<?php

namespace App;

class Database
{
    //db infos
    private $host = 'localhost';
    private $dbPassword = "root";
    private $dbUser = "root";
    private $dbName = "Keychain_db";

    public function __construct()
    {
        try {
            $conn = new \mysqli($this->host, $this->dbUser, $this->dbPassword, $this->dbName);
            echo "Connection with the db established with success";
            return $conn;
        } catch (\Exception $e) {
            echo 'Connection error: ' . $e->getMessage();
            exit();
        }
    }
}