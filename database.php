<?php
class Connect {
    
    private $server = "localhost";
    private $user = "root";
    private  $password = "root";
    private  $dbname="form";
    private  $dbc;
    
    
   public function getconnection()  {
       $this->dbc = new mysqli($this->server,$this->user,$this->password,$this->dbname);
       return $this->dbc;
        
    }

}
trait display{
    public function reterive($abc){
      $check = mysqli_query($abc, "SELECT * FROM issue  limit 2");
      return $check;
    }
}

class show {
    use display;
}
?>