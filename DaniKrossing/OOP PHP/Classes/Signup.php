<?php

//Signup child class Dbh parents class
class Signup extends Dbh
{
    private $username;
    private $pwd;

    public function __construct($username, $pwd)
    {
        $this->username = $username;
        $this->pwd = $pwd;
    }


    private function insertUser()
    {
        $query = "INSERT INTO users ('username', 'pwd') VALUES (:username, :pwd); ";

        $stmt = parent::connect()->prepare($query);
        $stmt->bindParam(":username", $this->username);
        $stmt->bindParam(":pwd", $this->pwd);
        $stmt->execute();
    }


    //Също към errosrs
    //Проверява свойството потребителско име, което всъщност съдържа всякакъв вид стойност
    //те връщат false защото няма error messages но ако нямат каквато и да е информация, само един от тях, 

    private function isEmptySubmit()

    {
        if (isset($this->username) && isset($this->pwd)) {
            return false;
        } else {
            return true;
        }
    }

    public function signuptUser()
    {
        // Error handlers
        if ($this->isEmptySubmit()) {
            header("Location: " . $_SERVER['DOCUMENT_ROOT'] . '/index.php');
            die();
        }
        // If no errors, sighnup user

        $this->insertUser();
    }
}
