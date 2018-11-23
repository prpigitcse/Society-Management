<?php
require('database.php');

if(isset($_POST['id'])){
    $id=$_POST['id'];
    $sql = "UPDATE user_request set status='1' where email='$id' ";
    $res = mysqli_query($conn,$sql);

    //NOTE: ALso set the status in register table to 1 if admin approves

    // $query = "UPDATE register set status='1' where email='$id' ";
    // $result = mysqli_query($conn,$query);
   
}

?>
