<?php
require 'dbconnection.php';
require 'guest.php';

if(isset($_POST['pass'])){

$guest_name=$_POST['guest_name'];
$guest_email=$_POST['email'];
$guest_room=$_POST['guest_room'];
$guest_mobile=$_POST['guest_mobile'];
$booked_day=$_POST['booked_day'];
$guest_pass=$_POST['password_hash'];

$guest_data= array(
    'guest_name' => $guest_name,
    'guest_email' => $guest_email,
    'guest_room' => $guest_room,
    'guest_mobile'=>$guest_mobile,
    'booked_day' => $booked_day,
    'guest_pass' => $guest_pass
);

$table_guest='guest';
$guest->dbRowInsert($table_guest,$guest_data);


$mobile=$guest_mobile;
$message="Your Unique Id for Society Management is:$guest_pass";
// $guest->send_msg($mobile,$message);
}


?>

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
        <div class="col-xs-offset-3 col-xs-6 guest">
        <form action="" method="POST">
        <h3 id="pass_system_title">Guest User Pass System</h3>
        <h4 id="pass_created"></h4>
        <input type="text" class="form-control fadeIn first" id="guest_name" name="guest_name"required=required placeholder="name"> <br>   
      <input type="email" name="email" id="guest_email" class="form-control fadeIn second"  placeholder="Email"><br>
      <input type="number" id="guest_room" class="form-control fadeIn third" name="guest_room" placeholder="Room No"><br>
       <input type="mobile" id="guest_mobile" class="form-control fadeIn fourth" name="guest_mobile"  placeholder="Mobile No" required=required><br>
      <input type="date" id="booked_day" class="form-control fadeIn fifth" name="booked_day" placeholder="Booked Date: " onchange="this.className=(this.value!=''?'has-value':'')"><br>
       <input type="hidden" id="password_hash" name="password_hash" required=required>
       <div class="form-controls"> 
       <span class="fadeIn sixth" id="create_text">click here to generate pass id</span> 
       <button name="create_key" id="create_key" class="btn btn-success fadeIn sixth" required=required>Create a PASS</button>
       </div>
        <input type="submit" class="fadeIn seventh" name="pass" value="Submit">
        </form>
</div> 
        </div>
    </div>

            

  <script>
     $(document).ready(function() {
       $('#create_key').click(function(e) {
        e.preventDefault();
        e.stopPropagation(); 

        $.ajax({
          type: "POST",
          url: "ajax.php",
          success: function(response){
            var res = response;
            $('#password_hash').val(res);
            $('#pass_created').text("Unique Pass Id Created Succesfully!");
          }
         });
       });
     });
     </script>
     </div>
</body>
    
</html>

