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
    <h2 class="inactive underlineHover"><a href="https://royalsociety.org"" target="blank">About </a></h2>
    <h2 class="inactive underlineHover"><a href="oursocialnetwork.html">Social </a></h2>



    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/specbee.png" id="icon" alt="User Icon" />
      <h3>WELCOME ADMIN</h3>
    </div>

    <!-- Login Form -->
    <form action="admin_dashboard.php" method="POST">
      <input type="text" name="email" id="login" class="fadeIn second"  placeholder="Email">
      <input type="password" id="password" class="fadeIn third" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" name="login" value="Log In">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="forgetpassword.html">Forgot Password?</a>
</div>
</body>
</html>