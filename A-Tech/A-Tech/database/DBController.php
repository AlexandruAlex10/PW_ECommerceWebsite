<?php

class DBController
{
    //Database Connection Properties
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "a-tech";

    //Connection property
    public $con = null;

    //Call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Connection Failed... " . $this->con_connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

//Close MySQL connection
    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}