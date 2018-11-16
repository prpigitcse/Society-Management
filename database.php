<?php

class Database
{
    private $server="localhost";
    private $username= "root";
    private $passwd = "1";
    private $dbname= "users";
    public $conn;

        public function getConnection()
        {
            $this->conn = new mysqli($this->server, $this->username, $this->passwd, $this->dbname);      
            if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                }
                else
                {
                    echo "Connection successfull";
                } 
                return $this->conn;

        }
}

?>
