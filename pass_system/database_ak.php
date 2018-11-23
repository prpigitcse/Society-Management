<?php

class db 
{
private $server = 'localhost';
private $user = 'root';
private $passwd = '1';
private $db = 'SOCIETY_MANAGEMENT';
private static $dbCon;

public function __construct() {
    $this->dbCon = mysqli_connect($this->server, $this->user, $this->passwd, $this->db);
    if (($this->dbCon)->connect_error) {
        die("Connection failed: " . ($this->dbCon)->connect_error);
     }

    //  else{
    //     echo "connected successfully";
    //  }

  return $this->dbCon;
}

}

?>
