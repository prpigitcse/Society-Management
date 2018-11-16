<?php
include('database.php');
$obj=new Database();
$conn=$obj->getConnection();
if(isset($_POST['id'])){
    $id=$_POST['id'];
    $res = mysqli_query($conn,"UPDATE User set status='1' where email='$id' ");
   
}

?>