<?php
require 'dbconnection.php';
$db_obj= new db();
$db_obj->connector();
$conn=$db_obj->dbCon;

$guest_name=$_POST['guest_name'];
// echo $guest_name;
$guest_email=$_POST['email'];
$guest_room=$_POST['guest_room'];
$guest_mobile=$_POST['guest_mobile'];
$booked_day=$_POST['booked_day'];
$guest_pass=$_POST['guest_pass'];
// echo $guest_pass;

 


function dbRowInsert($table_name, $form_data)
{
    global $conn;
    // echo $conn;
    // retrieve the keys of the array (column titles)
    $fields = array_keys($form_data);

    $sql = "INSERT INTO ".$table_name."
   (`".implode('`,`', $fields)."`)
   VALUES('".implode("','", $form_data)."')";

    // run and return the query result resource
    if (mysqli_query($conn, $sql)) {
        echo "New record created successfully";
    }
    else
    {
        echo "Error: " . $sql . "" . mysqli_error($conn);
    }

}
$guest_data= array(
    'guest_name' => $guest_name,
    'guest_email' => $guest_email,
    'guest_room' => $guest_room,
    'guest_mobile'=>$guest_mobile,
    'booked_day' => $booked_day,
    'guest_pass' => $guest_pass
);
var_dump($guest_data);

$table_guest='guest';
dbRowInsert($table_guest,$guest_data);

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
    <script src="main.js"></script>
    <title>SOCIETY_MANAGEMENT</title>
</head>
<body>
    <div class="container">
        <div class="col-xs-offset-4 col-xs-4 guest">
        <form action="" method="POST">
            <h3>Guest User Pass System</h3>
       <label for="">Guest Name:</label> <input type="text" class="form-control" id="guest_name" name="guest_name" width="100%" placeholder="name"> <br>   
       <label for="">Guest Email:</label> <input type="email" name="email" id="guest_email" class="form-control"  placeholder="Email"><br>
       <label for="">Guest Room No:</label><input type="number" id="guest_room" class="form-control" name="guest_room"><br>
       <label for="">Guest Mobile:</label><input type="mobile" id="guest_mobile" class="form-control" name="guest_mobile"><br>
       <label for="">Booked Day:</label><input type="date" id="booked_day" class="form-control" name="booked_day"><br>
       <label for="">Guest Pass:</label> <input type="text" id="guest_pass" class="form-control" required=required name="guest_pass"><br>

        <input type="submit" class="fadeIn third" name="pass" value="Guest_submit">
        </form>
        </div>
    </div>
</body>
</html>