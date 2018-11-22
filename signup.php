<?php

require("db.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}


if(isset($_POST['register']))
{
    $name = test_input($_POST['name']);

    $email = test_input($_POST['email']);
    if (!preg_match("/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/", $email)){ 

        echo "<center>Invalid email</center>";
        exit;
        
        }

    $adhar =test_input($_POST['adhar']);
    if(!preg_match('/^[0-9]{10}+$/', $adhar))
    {
        echo "<center>Invalid adhar no.</center>";
        exit;
    }

    $age = test_input($_POST['age']);
    if($age < 18 )
    {
        echo "<center> Age is invalid </center>";
        exit;
    }
    $address = test_input($_POST['address']);
    $mobile = test_input($_POST['mob']);
    if(!preg_match('/^[0-9]{10}+$/', $mobile))
    {
        echo "<center>Invalid mobile no.</center>";
        exit;
    }

    $password = $_POST['passwd'];
    $password = password_hash($password,PASSWORD_DEFAULT);

    $con_password = test_input($_POST['con-passwd']);

    if (password_verify($con_password, $password)) {
        echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
        exit;
    }

    $db = new Database();
    $conn = $db->getConnection();

    $fields=array("name","email","adhar","age","address","mobile","password");
    $data = array($name,$email,$adhar,$age,$address,$mobile,$password);
    $db->Insert("register",$fields,$data);

    $fields=array("name","adhar","email","contact");
    $data = array($name,$adhar,$email,$mobile);
    $db->Insert("user_request",$fields,$data);
     
}  
 
 
 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sign Up</title>
</head>

<script>
    function Validate() {

        var password = document.getElementById("passwd").value;
        var confirmPassword = document.getElementById("con-passwd").value;
        if (password != confirmPassword) {
            document.getElementById("pwd_match").innerHTML = "Password do not match";

        }
        else {
            document.getElementById("pwd_match").innerHTML = "";
        }

    }

</script>


<body>
<form action="" method="POST">
Name
    <input type="text" name="name" value=""><br>Email
    <input type="email" name="email" value=""><br>Adhar
    <input type="text" name="adhar" value=""><br>Age
    <input type="text" name="age" value=""><br>Address
    <input type="text" name="address" value=""><br>Mobile
    <input type="text" name="mob" value=""><br>Password
    <input type="password" id="passwd" name="passwd" value="" ><br> Confirm Password
    <input type="password" name="con-passwd" value="" id="con-passwd" onkeyup="Validate();"><br>
    <p class="pwd_match" id="pwd_match"></p>
    <input type="submit" name="register" value="Register">
    
</form>
    
</body>
</html>
