<?php
class Connect {
    
    private $server = "localhost";
    private $user = "root";
    private  $password = "root";
    private  $dbname="issue";
    private  $dbc;
    
    
   public function getconnection()  {
       $this->dbc = new mysqli($this->server,$this->user,$this->password,$this->dbname);
       return $this->dbc;
        
    }

}
// trait display{
//     public function retrieve($abc,$table){
//       $query = "SELECT * FROM issue where category='$table' limit 1";
//       $check = mysqli_query($abc,$query );
//       return $check;
//     }
//     public function info($abc,$id){
//         $query = "SELECT * FROM issue where issueid='$id'";
//         $check = mysqli_query($abc,$query);
//         return $check;
//     }
  
// }

class show {
    // use display;
    public function retrieve($abc,$table){
        $query = "SELECT * FROM problem where category='$table' limit 2";
        $check = mysqli_query($abc,$query );
        return $check;
      }

      public function all_issues($abc,$table){
        $query = "SELECT * FROM problem where category='$table'";
        $check = mysqli_query($abc,$query );
        return $check;
      }

      public function info($abc,$id){
        $query = "SELECT * FROM problem where issue_id='$id'";
        $check = mysqli_query($abc,$query);
        return $check;
    }
}

$obj = new Connect();
$conn = $obj->getconnection();
$show = new show();
$check = $show->retrieve($conn,'ELECTRICITY');
$result = $show->retrieve($conn,'WATER');
$result_parking= $show->retrieve($conn,'PARKING');
$result_security= $show->retrieve($conn,'SECURITY');
$result_clean= $show->retrieve($conn,'CLEANLINESS');

?>