<?php
class Connect {
    
    private $server = "localhost";
    private $user = "root";
    private  $password = "1";
    private  $dbname="admin";
    private static $dbc;
    

    public function __construct()  {
        $this->dbc = new mysqli($this->server,$this->user,$this->password,$this->dbname);
        return $this->dbc;
         
     }
    
   public function getconnection()  {
       $this->dbc = new mysqli($this->server,$this->user,$this->password,$this->dbname);
       return $this->dbc;
        
    }

}
$obj=new Connect();
$conn=$obj->getConnection();
?>
