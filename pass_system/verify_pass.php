<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/styleaks.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>SOCIETY_MANAGEMENT</title>
</head>
<body style="background-image: url('images/background.jpeg');
  background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	background-attachment: fixed;">
    
     <div class="wrapper fadeInDown">
       <div id="formContent"style="height:350px;">

    <div class="container">
        <div class="col-xs-offset-2 col-xs-4 guest">
        <form action="guest_details.php" method="POST" id="verify_form">
        <h3 id="pass_system_title">Guest User Verification</h3>
        <h4 id="pass_created"></h4>
      <input type="text" class="form-control fadeIn first" id="guest_name" name="guest_name" placeholder="name"> <br>   
      <input type="text" name="pass_id" id="guest_name" class="form-control fadeIn second"  placeholder="Enter Pass Id" required=required><br>
        <input type="submit" class="fadeIn third" name="pass_verify" value="Submit">
        </form>
        <div><a href="admin_dashboard.php"><button class="btn btn-primary" style="margin-top:20px;">Back to Dashboard</button></a>

        </div>
    </div>
    </div>
    </div>
</body>
</html>