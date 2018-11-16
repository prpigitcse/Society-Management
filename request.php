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
     <h2 class="inactive underlineHover"><a href="admin_dashboard.php">   check your issue </a></h2>
     <h2 class="active"> Pending request </a></h2>
     <h2 class="inactive underlineHover"><a href="pass_request.php"> Pass request </a></h2>


    <!-- Icon -->
    <div class="fadeIn first">
      <h3>ADMIN DASHBOARD</h3>
      <p>list of pending request</p>
    </div>


    <!-- Login Form -->
<form method="POST" action="#">
    <pre>
NAME : ANUSH  
ADHAR NO : 666846868476327 
EMAIL : ANUSH@SPECBEE.COM
CONTACT : 7878979897
</pre>
<input type="button" value="approved" name="approved">
</form>
<form method="POST" action="#">
    <pre>
NAME : ram  
ADHAR NO : 736888994859 
EMAIL : ram@SPECBEE.COM
CONTACT : 265665657373
</pre>
<input type="button" value="approved" name="approved">
</form>
    <!-- Remind Passowrd -->
    <div id="formFooter">
 <b> Society Management services </b><br>
 <a href="admin_logout.php"><input type="button" value="Logout"></a>
    </div>

  </div>
</div>
</body>
</html>


