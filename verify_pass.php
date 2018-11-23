


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

    <title>SOCIETY_MANAGEMENT</title>
</head>
<body id="bgcolor">
    
     <div class="wrapper fadeInDown">
       <div id="formContent">

    <div class="container">
        <div class="col-xs-offset-4 col-xs-4 guest">
        <form action="guest_details.php" method="POST" id="verify_form">
        <h3 id="pass_system_title">Guest User Verification</h3>
        <h4 id="pass_created"></h4>
      <input type="text" class="form-control fadeIn first" id="guest_name" name="guest_name" placeholder="name"> <br>   
      <input type="text" name="pass_id" id="guest_name" class="form-control fadeIn second"  placeholder="Enter Pass Id" required=required><br>
        <input type="submit" class="fadeIn third" name="pass_verify" value="Submit">
        </form>
        </div>
    </div>
    </div>
    </div>
</body>
</html>