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
    <h2 class="inactive underlineHover"> <a href="dashboard.php">submit isuue  </h2>
    <h2 class="inactive underlineHover"> <a href="search issue.php"> check your issue </a></h2>
    <h2 class="active"> Pass System </a></h2>
    <h2 class="inactive underlineHover"> <a href="labour.php"> labour section </a></h2>
    <h2 class="inactive underlineHover"> <a href="labour_details.php"> labour form </a></h2>

    <!-- Icon -->


    <!-- Login Form -->
    <form method="POST" action="search issue.php">
    <input type="text" id="subject" class="fadeIn second"  required="required" name="pass_name" placeholder="Name">
    <input type="text" id="subject" class="fadeIn second"  required="required" name="pass_name" placeholder="Pass Id">
    <input type="text" id="subject" class="fadeIn second"  required="required" name="pass_name" placeholder="address">
    <input type="text" id="subject" class="fadeIn second"  required="required" name="pass_name" placeholder="Romms required">
    <input type="text" id="subject" class="fadeIn second"  required="required" name="pass_name" placeholder="Number of Peoples">
    <input type="text" id="subject" class="fadeIn second"  required="required" name="pass_name" placeholder="specify extra">

      <input type="submit" class="fadeIn fourth" value="submit" name="submit">
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


