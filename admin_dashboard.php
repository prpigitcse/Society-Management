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
     <!-- <h2 class="inactive underlineHover"><a href="dashboard.php"> submit isuue  </a></h2> -->
     <h2 class="active">  check your issue </a></h2>


    <!-- Icon -->
    <div class="fadeIn first">
      <h3>ADMIN DASHBOARD</h3>
    </div>


    <!-- Login Form -->
    <form method="POST" action="admin_page.php">
    <select id="position" class="fadeIn first"  name="search_issue" placeholder="search issue" >
            <option>ELECTRICITY</option>
            <option>LAND</option>
            <option>WATER</option>
            <option>TRANSPORT</option>
            <option>WORK</option>      
     </select>
     <select id=" position" class="fadeIn first"  name="status" placeholder="status" >
            <option >OPEN</option>
            <option >CLOSE</option>
  
     </select>
      <input type="submit" class="fadeIn fourth" value="check" name="check">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
 <b> specbee consulting services </b>
    </div>

  </div>
</div>
</body>
</html>


