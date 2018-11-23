<?php


require("dbclasses.php");

function test_input($data) {
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
  }


if(isset($_POST['signup']))
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
    $password = md5($password);

    $con_password = md5($_POST['con-passwd']);

    if ($con_password==$password) {
   //     echo 'Password is valid!';
    } else {
        echo 'Invalid password.';
        exit;
    }

    $db = new db();
  //  $conn = $db->getConnection();
   

   $data = array(
        'name'=>$name,
        'email'=>$email,
        'adhar'=>$adhar,
        'age'=>$age,
        'address'=>$address,
        'mobile'=>$mobile,
        'password'=>$password
    );
    
    $db->dbRowInsert("register",$data);
   

    // // $fields=array("name","adhar","email","contact");
    // $data = array('name'=>$name,
    // 'adhar'=>$adhar,
    // 'email'=>$email,
    // 'contact'=>$mobile);
    //  $db->dbRowInsert("user_request",$data);

}


?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Society Management</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover"> <a href="index.php"> Sign In </a></h2>
    <h2 class="active">Sign Up </h2>
    <h2 class="inactive underlineHover"><a href="https://royalsociety.org" target="blank">About </a></h2>
    <h2 class="inactive underlineHover"> <a href="oursocialnetwork.php"> Social </a></h2>

    <!-- Icon -->


    <!-- Login Form -->
    <form method="POST" action="#">
    <input type="text" id="name" class="fadeIn second"  required="required" name="name" placeholder="Full Name">
      <input type="text" id="email" class="fadeIn third"  required="required" name="email" placeholder="Email">
      <input type="text" id="eid" class="fadeIn fourth"  required="required" name="adhar" placeholder="Adhar Number">
      <input type="text" id="dob" class="fadeIn fourth"  required="required" name="age" placeholder="Enter age">
      <textarea  id="textarea" class="fadeIn third form-control" height="150px;" required="required" name="address" placeholder="Enter your Address">
</textarea>
 
      <!-- <input type="number" id="project" class="fadeIn fourth" name="contact" required="required" placeholder="contact"> -->
      <input type="text" id="exp" class="fadeIn fourth"   required="required" name="mob" placeholder="phone number">

      <input type="password" id="password" class="fadeIn fourth"  required="required" name="passwd" placeholder="Password">
      <input type="password" id="cpassword" class="fadeIn fourth"  required="required" name="con-passwd" placeholder="Confirm Password">
      <input type="submit" class="fadeIn sixth" value="Sign up" name="signup">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
 <b>Society Management services </b>
    </div>

  </div>
</div>
</body>
</html>


