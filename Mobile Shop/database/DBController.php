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

       $this->con = mysqli_connect($this->sname, $this->unmae, $this->password, $this->db_name);

       if ($this->con->connect_error){
        echo "Fail " . $this->con->connect_error;
    }
    }


    //for mysqli closing connection
    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }


    public function __destruct()
    {
        $this->closeConnection();
    }
}

//DBController object
$db = new DBController();
