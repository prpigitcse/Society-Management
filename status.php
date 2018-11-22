<?php
require('db.php');
$obj=new Database();
$conn=$obj->getConnection();

if(isset($_POST['id']))
{
    $id=$_POST['id'];
    $sql = "UPDATE user_request set status='1' where email='$id' ";
    echo $sql;
    $res = mysqli_query($conn,$sql);
    echo $res['status'];
}

?>
