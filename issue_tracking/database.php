<?php
class Connect {
    
    private $server = "localhost";
    private $user = "root";
    private  $password = "root";
    private  $dbname="issue";
    private static $dbc;
    
    
    public function __construct()  {
       $this->dbc = new mysqli($this->server,$this->user,$this->password,$this->dbname);
       if (($this->dbc)->connect_error) {
        die("Connection failed: " . ($this->dbc)->connect_error);
     }

     else{
        // echo "connected successfully";
     }

      return $this->dbc;
    }
        
  

}
// trait display{
//     public function retrieve($abc,$category){
//       $query = "SELECT * FROM issue where category='$category' limit 1";
//       $check = mysqli_query($abc,$query );
//       return $check;
//     }
//     public function info($abc,$id){
//         $query = "SELECT * FROM issue where issueid='$id'";
//         $check = mysqli_query($abc,$query);
//         return $check;
//     }
  
// }

//$obj = new Connect();



?>
