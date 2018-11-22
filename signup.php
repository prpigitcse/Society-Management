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
    <h2 class="inactive underlineHover"> <a href="index.php"> Sign In </a></h2>
    <h2 class="active">Sign Up </h2>

    <!-- Icon -->


    <!-- Login Form -->
    <form method="POST" action="form.php">
    <input type="text" id="name" class="fadeIn second"  required="required" name="name" placeholder="Full Name">
      <input type="text" id="email" class="fadeIn third"  required="required" name="email" placeholder="Email">
      <input type="text" id="eid" class="fadeIn fourth"  required="required" name="adhar" placeholder="Adhar Number">
      <input type="date" id="dob" class="fadeIn fourth"  required="required" name="dob" placeholder="DOB(DD/MM/YYYY)">
      <textarea  id="textarea" class="fadeIn third form-control" height="150px;" required="required" name="issue" placeholder="type your issue">
</textarea>
 
      <input type="number" id="project" class="fadeIn fourth" name="contact" required="required" placeholder="contact">
      <input type="text" id="exp" class="fadeIn fourth"   required="required" name="experience" placeholder="Experience in months">

      <input type="password" id="password" class="fadeIn fourth"  required="required" name="password" placeholder="Password">
      <input type="password" id="cpassword" class="fadeIn fourth"  required="required" name="confirm" placeholder="Confirm Password">
      <input type="submit" class="fadeIn sixth" value="Sign up" name="signup">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
 <b>Society Management services </b>
    </div>

  </div>
</div>
</body>
</html>


