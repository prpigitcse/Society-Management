


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>specbee</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover"> <a href="dashboard.php"> submit isuue </a>  </h2>
    <h2 class="inactive underlineHover"> <a href="search issue.php"> check your issue </a></h2>
    <h2 class="inactive underlineHover"> <a href="pass_system.php"> Pass System </a></h2>
    <h2 class="inactive underlineHover"> <a href="labour.php"> labour section </a></h2>
    <h2 class="active"> labour section </h2>


    <!-- Icon -->


    <!-- Login Form -->
    <form method="POST" action="#">
    <select id="position" class="fadeIn first"  name="labour_category" placeholder="labour category" >
            <option>ELECTRICITY</option>
            <option>WATER</option>
            <option>PARKING</option>
            <option>CLEANLINESS</option>
            <option>SECURITY</option>      
     </select>
     <select id="position" class="fadeIn first"  name="labour_name" placeholder="Position" >
            <option value="harry">harry</option>
            <option value="bob">bob</option>
            <option value="mary">mary</option>
            <option value="sham">sham</option>
            <option value="rosy">rosy</option>       
     </select>    <input type="text" id="subject" class="fadeIn second"  required="required" maxlength=10 name="labour_contact" placeholder="Labour contact">
      <input type="submit" class="fadeIn fourth" value="submit" name="labour_detail_submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
 <b> Society Management services </b><br>

<a href="logout.php"><input type="button" value="Logout"></a>

    </div>

  </div>
</div>
</body>
</html>
<?php
include("connection.php");
$labour_name= $_POST['labour_name'];
$labour_number=$_POST['labour_contact'];
$labour_category=$_POST['labour_category'];
$labour=array(
    'labour_name'=>$labour_name,
    'labour_category'=>$labour_category,
    'labour_number'=>$labour_number
);
$obj->dbRowInsert("labour_table", $labour);
?>



