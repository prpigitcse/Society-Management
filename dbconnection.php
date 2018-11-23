<?php

class db {

   

private $server = 'localhost';
private $user = 'root';
private $passwd = '1';
private $db = 'SOCIETY_MANAGEMENT';
public $dbCon;

public function connector() {
    $this->dbCon = mysqli_connect($this->server, $this->user, $this->passwd, $this->db);
    if (($this->dbCon)->connect_error) {
        die("Connection failed: " . ($this->dbCon)->connect_error);
     }

   //   else{
   //      echo "connected successfully";
   //   }

  return $this->dbCon;
}

}
$db_obj= new db();
$db_obj->connector();
$conn=$db_obj->dbCon;
?>
