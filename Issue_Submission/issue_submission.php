<?php
include('database_anush.php');
class labour extends Database{
  
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

    public function dbRowInsert($table_name, $form_data)
    {
        // $this->dbCon;
    
       // retrieve the keys of the array (column titles)
       $fields = array_keys($form_data);
    
       $sql = "INSERT INTO ".$table_name."(`".implode('`,`', $fields)."`)
                 VALUES('".implode("','", $form_data)."')";
    
       // run and return the query result resource
       if (mysqli_query($this->dbc, $sql)) {
    
           // header("Location: index.php");
         //   echo "New record created successfully";
       }
       else
       {
           echo "Error: " . $sql . "" . mysqli_error( $this->dbc);
       }
    }
    public function update_labour($status,$end_date,$otp){
        $update= mysqli_query($this->dbc,"UPDATE problem SET status='$status' , end_date='$end_date' WHERE otp='$otp'");
        if ($update) {
            echo "Updated successfully";
        }
        else
        {
        echo "Error: " . $update . "" . mysqli_error($this->dbc);
        }
      }

      public function labour_info($name){
        $contact=mysqli_query($this->dbc,"select * from labour_table where labour_name='$name'");
        return $contact;
    }

}
$db=new labour();

?>