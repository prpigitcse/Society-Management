<?php
class connect{
    private $server = "localhost";
    private $user = "root";
    private $password ="";
    private $db = "royal_society";
    public $dcon;

    public function getconnection(){
$this->dcon=new mysqli($this->server,$this->user,$this->password,$this->db);
return $this->dcon;
    } 
    

 
 //insert values from signin 
 function dbRowInsert($table_name, $form_data)
 {
     // $this->dbCon;
 
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);
 
    $sql = "INSERT INTO ".$table_name."(`".implode('`,`', $fields)."`)
              VALUES('".implode("','", $form_data)."')";
 
    // run and return the query result resource
    if (mysqli_query($this->dcon, $sql)) {
 
        // header("Location: index.php");
      //   echo "New record created successfully";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error( $this->dcon);
    }
 }
//update your status
public function update($name, $id){
    $update= mysqli_query($this->dcon,"UPDATE problem SET labour_name='$name' WHERE issue_id='$id'");
    // if ($update) {
    //     echo "Updated successfully";
    // }
    // else
    // {
    // echo "Error: " . $sql . "" . mysqli_error($conn);
    // }
  
  }
  public function getinfo_labour($id){
      $info=mysqli_query($this->dcon,"select * from problem where issue_id='$id'");
        return $info;
  }
  public function labour($name){
      $contact=mysqli_query($this->dcon,"select * from labour_table where labour_name='$name'");
      return $contact;
  }

  public function update_labour($status,$end_date,$otp){
    $update= mysqli_query($this->dcon,"UPDATE problem SET status='$status' , end_date='$end_date' WHERE otp='$otp'");
    if ($update) {
        echo "Updated successfully";
    }
    else
    {
    echo "Error: " . $update . "" . mysqli_error($this->dcon);
    }
  }
}
$obj = new connect();
$obj->getconnection();




?>