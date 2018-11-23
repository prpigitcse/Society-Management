<?php

class Database
{
    private $server="localhost";
    private $username= "root";
    private $passwd = "1";
    private $dbname= "user";
    private  static $conn;

        public function __construct()
        {
            $this->conn = new mysqli($this->server, $this->username, $this->passwd, $this->dbname);      
            if ($this->conn->connect_error) {
            die("Connection failed: " . $conn->connect_error);
                }
                return $this->conn;

        }
}

?>
