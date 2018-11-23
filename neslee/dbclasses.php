<?php
include('database_neslee.php');

class db extends Database{
 function dbRowInsert($table_name, $form_data)
 	{
     // $this->dbCon;
 
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);
 
    $sql = "INSERT INTO ".$table_name."(`".implode('`,`', $fields)."`)
              VALUES('".implode("','", $form_data)."')";
 
    // run and return the query result resource
    if ($this->conn-> query($sql)) {
 
        // header("Location: index.php");
      //   echo "New record created successfully";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error( $this->conn);
    }
 }
        public function login($email,$password){
            session_start();
            $check = mysqli_query($this->conn, "SELECT * FROM register WHERE email='$email' AND `password`='$password'");
            $row = mysqli_fetch_assoc($check);
            $_SESSION['name']=$row['name'];
            if($row) {
                header("Location:dashboard.php");
                   }
                   else{
                    header("Location:index.php"); 
                   }

        }



    function send_msg($mobile,$message){
    

    $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9916806095&Password=state176&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=akshaB8dZMHNhkRqD2OUfn4a") ,true);
    if ($json["status"]==="success") {
    echo $json["msg"];
    //your code when send success
    }else{
    echo $json["msg"];
    //your code when not send
    }

    }
}
$obj=new db();
?>
