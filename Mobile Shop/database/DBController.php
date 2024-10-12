<?php

class DBController
{


    protected $sname = "localhost";
    protected $unmae = "root";
    protected $password = "qwerty";
    protected $db_name = "shopee";


    public $con = null;
    function __construct()
    {

        $con = mysqli_connect($this->sname, $this->unmae, $this->password, $this->db_name);

        if (!$con) {
            echo "Connection failed!";
        }
    }


    //for mysqli closing connection
    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con - null;
        }
    }


    public function __destruct()
    {
        $this->closeConnection();
    }
}

//DBController object
$db = new DBController();
