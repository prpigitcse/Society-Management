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

    public function login($name,$password){
        $check = mysqli_query($this->dbc, "SELECT * FROM labour_table WHERE labour_name='$name' AND labour_password='$password'");
        $row = mysqli_fetch_assoc($check);
        if($row) {
            header("Location:labour.php");
               }
               else{
                header("Location:index.php"); 
               }
    }

	public function labour($name){
      $contact=mysqli_query($this->dbc,"select * from labour_table where labour_name='$name'");
      return $contact;
  }


  public function update_labour($status,$end_date,$otp){
        $update= mysqli_query($this->dbc,"UPDATE problem SET status='$status' , end_date='$end_date' WHERE otp='$otp'");
        if ($update) {
            //echo "Updated successfully";
        }
        else
        {
        echo "Error: " . $update . "" . mysqli_error($this->dcon);
        }
      }




}
$labour=new Connect();
$labour->getconnection();
?>
