<?php
class Database {
    
    private $server = "localhost";
    private $user = "root";
    private  $password = "";
    private  $dbname="royal_society";
    private  static $dbc;
    
   public function __construct(){
       $this->dbc = new mysqli($this->server,$this->user,$this->password,$this->dbname);
       
       if (($this->dbc)->connect_error) {
        die("Connection failed: " . ($this->dbc)->connect_error);
     }

     else{
        echo "connected successfully";
     }
     return $this->dbc;
    }
}
?>