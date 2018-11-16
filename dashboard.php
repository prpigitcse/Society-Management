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
    <h2 class="active"> submit isuue  </h2>
    <h2 class="inactive underlineHover"> <a href="search issue.php"> check your issue </a></h2>


    <!-- Icon -->
    <div class="fadeIn first">
      <img src="images/specbee.jpg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form method="POST" action="form.php">
    <select id="position" class="fadeIn first"  name="position" placeholder="Position" >
            <option>ELECTRICITY</option>
            <option>LAND</option>
            <option>WATER</option>
            <option>TRANSPORT</option>
            <option>WORK</option>      
     </select>
    <input type="text" id="subject" class="fadeIn second"  required="required" name="subject" placeholder="subject">
      <input type="text" id="issue" class="fadeIn third" height="150px;" required="required" name="issue" placeholder="type your issue">

      <input type="submit" class="fadeIn fourth" value="submit" name="submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
 <b> specbee consulting services </b>
    </div>

  </div>
</div>
</body>
</html>


