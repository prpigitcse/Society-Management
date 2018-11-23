
<?php
class guest{

    // function to insert guest user details in database

    function dbRowInsert($table_name, $form_data){
     
    global $conn;
    
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);

    $sql = "INSERT INTO ".$table_name."
   (`".implode('`,`', $fields)."`)
   VALUES('".implode("','", $form_data)."')";

    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
      }
    else {
        echo "Error: " . $sql . "" . mysqli_error($conn);
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
    $sql=mysqli_query($conn,"select * from guest where guest_pass='$pass_id'");
    return $sql;
    // $guest_details=$sql->fetch_assoc();
    // $guest_name=$guest_details['guest_name'];
    // $guest_email=$guest_details['guest_email'];
    // $guest_room=$guest_details['guest_room'];
    // $guest_mobile=$guest_details['guest_mobile'];
    // $booked_day=$guest_details['booked_day'];

    echo $guest_name."<br>".$guest_email."<br>".$guest_room."<br>".$guest_mobile."<br>".$booked_day;

    }

}

$guest=new guest();

?>