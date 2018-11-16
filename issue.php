
<?php

include('database.php');
$obj = new Connect();
$conn = $obj->getconnection();
// $check = mysqli_query($conn, "SELECT * FROM issue  limit 2");
$show = new show();
$check = $show->reterive($conn);

   while($array=mysqli_fetch_array($check))
   {
       $issue_name=$array['issue_name'];
       $status=$array['status'];
   }
?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>specbee</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />

    <script src="main.js"></script>
</head>
<body style="background-color:skyblue;">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover"> <a href="issue_tracking.php"> check your issue </a></h2>


   
    <div class="container-fluid">
<div class="row">
<div class="col-sm-6">
<!-- card 1 -->
<div class="card">
<div class="card-body">
<h4 class="card-title">Electricity</h4>
 <table class="table table-striped">
    <thead>
      <tr>
      
        <th>Issue</th>
        <th>Issue status</th>
      </tr>
    </thead>


   <tr>
   <td><?php echo $issue_name;?></td>
   <td><?php echo $status;?></td>
   </tr>

  
    </tbody>
  </table>
<a href="electricity.php" class="card-link">track more</a>
</div>
</div>

</div>

<!-- card1 close -->
<div class="col-sm-6">

<div class="card">
<div class="card-body">
<h4 class="card-title">Water</h4>
<table class="table table-striped">
    <thead>
      <tr>
      
        <th>Issue</th>
        <th>Issue status</th>
      </tr>
    </thead>
    

   
  
   <tr>
   <td><?php echo $issue_name;?></td>
   <td><?php echo $status;?></td>
   </tr>

    </tbody>
  </table>

<a href="electricity.php" class="card-link">track more</a>
</div>
</div>

</div>
</div>
</div>
  
    <div id="formFooter">
 <b> specbee consulting services </b>
    </div>

  </div>
</div>
</body>
</html>

