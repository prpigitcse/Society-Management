
<?php
require_once("database_ak.php");

class guest extends db{

    // function to insert guest user details in database

  function dbRowInsert($table_name, $form_data){
     

    
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);

    $sql = "INSERT INTO ".$table_name."
   (`".implode('`,`', $fields)."`)
   VALUES('".implode("','", $form_data)."')";

    if ($this->dbCon->query($sql)) {
        echo "New record created successfully";
      }
    else {
        echo "Error: " . $sql . "" . mysqli_error($this->dbCon);
      }

    }

    // function to send message to the Guest

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


    // function to verify the Guest

    function guest_verify($pass_id){

    global $conn;
    $sql=mysqli_query($this->dbCon,"select * from guest where guest_pass='$pass_id'");
    return $sql;
 

    }

}

$guest=new guest();

?>
