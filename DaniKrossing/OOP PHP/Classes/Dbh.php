<?php

class Dbh {
    private $host = "localhost";
    private $dbname = "myfirstdatabase";
    private $dbusername = "gatakka";
    private $dbpassword = "qwerty";


    protected function connect () {
        try {
            $pdo = new PDO("mysql:host=" .$this ->host . ";dbname=" .
            $this->dbname, $this->dbusername, $this->dbpassword);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);  
            //Make sure to return the $pdo
            return $pdo;

        } catch (PDOException $e) {
            die("Connection failed:" . $e->getMessage());   
        }
    }
}

