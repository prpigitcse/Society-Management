<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Society Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> Sign In </h2>
    <h2 class="inactive underlineHover"><a href="https://royalsociety.org" target="blank">About </a></h2>


    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/specbee.png" id="icon" alt="User Icon" />
      <h3>WELCOME ADMIN</h3>
    </div>

    <!-- Login Form -->
    <form action="#" method="POST">
      <input type="text" name="admin-name" id="login" class="fadeIn second"  placeholder="Enter admin name">
      <input type="password" id="password" class="fadeIn third" name="admin-password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="admin_login" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
<p>Royal society services</p>
</div>
</body>
</html>

<?php
  if(isset($_POST['admin_login'])){
//   $name="admin";
// $password="admin";
$admin_name="admin";
$admin_password="admin";
if(($_POST['admin-name'] == $admin_name) && ($_POST['admin-password'] == $admin_password)){


 //Location to admin dashboard
 // header('Location:admin_dashboard.php');

}
else{

  echo "<h4 class='text-center' style='color:red'>Invalid username or password</h4>";
  exit;
  // header('Location:index.php');

}
}

?>
