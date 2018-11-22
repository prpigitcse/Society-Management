<?php

class Database
{
    private $server="localhost";
    private $username= "root";
    private $passwd = "1";
    private $dbname= "admin";
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

        public function Insert($tableName,$field,$data)
        { 
            // $con = $this->getConnection();
    
            $field_values= implode(',',$field);
            $data_values=implode("','",$data);
            $sql= "INSERT INTO $tableName(".$field_values.") VALUES ('".$data_values."') ";
            $result = mysqli_query($this->conn, $sql);
            
            if($result)
            {
                // echo "inserted";  
                header("Location:login.php");

            }
            else
            {
                echo "not inserted";
                
            }
        
        }
}

?>
