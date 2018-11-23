<?php

require('database.php');


if(isset($_POST['id'])){
    $id=$_POST['id'];
    echo $id;
    $sql = "DELETE FROM user_request where email='$id' ";
    $res = mysqli_query($conn,$sql);

    //NOTE: The user hast to be deleted from the register table too...

    // $query = "DELETE FROM register where email='$id' ";
    // $result = mysqli_query($conn,$query);

}

?>
