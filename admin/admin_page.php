<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Society Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> update labour </h2>
    <h2 class="inactive underlineHover"><a href="https://royalsociety.org" target="blank">About </a></h2>
    <h2 class="inactive underlineHover"><a href="#" >Admin Dashboard </a></h2>




    <!-- Icon -->
    <div class="fadeIn first">
      <h3>WELCOME ADMIN</h3>
      <p>Assign Labourers</p>
    </div>

    <!-- Login Form -->
    <form action="labour_msg.php" method="POST">

 <div>
Issue Id:
<input type="text"  name="issue_id">
<br>
<div>Labour:
<select id="position" class="fadeIn first" name="labour" placeholder="labour" >
<option>--Select labour--</option>    
            <option value="harry">harry</option>
            <option value="bob">bob</option>
            <option value="mary">mary</option>
            <option value="sham">sham</option>
            <option value="rosy">rosy</option>     
     </select>
     <input type="submit" value="update" name="update">

</div>
     <br>
 </div>
 </form>
    <div>
<a href="admin_logout.php"><input type="button" value="Logout"></a>
</div>
    
</body>
</html>

