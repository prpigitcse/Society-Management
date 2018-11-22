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
     <h2 class="inactive underlineHover"><a href="dashboard.php"> submit isuue  </a></h2>
     <h2 class="active">  check your issue </a></h2>
     <h2 class="inactive underlineHover"><a href="pass_system.php"> Pass system </a></h2>
     <h2 class="inactive underlineHover"> <a href="labour.php"> labour section </a></h2>
    <h2 class="inactive underlineHover"> <a href="labour_details.php"> labour form </a></h2>


    <!-- Icon -->


    <!-- Login Form -->
    <form method="POST" action="#">
    <select id="position" class="fadeIn first"  name="search_issue" placeholder="search_issue" >
            <option>ELECTRICITY</option>
            <option>WATER</option>
            <option>PARKING</option>
            <option>CLEANLINESS</option>
            <option>SECURITY</option>      
     </select>
     <select id="position" class="fadeIn first"  name="status" placeholder="status" >
            <option >OPEN</option>
            <option >CLOSE</option>
  
     </select>
      <input type="submit" class="fadeIn fourth" value="check" name="check">
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


