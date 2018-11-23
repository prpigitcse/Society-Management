<?php

include("issue_track.php");
  
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Society Management</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />
    <script src="main.js"></script>
</head>
<body  style="background-image: url('images/background.jpeg');
  background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	background-attachment: fixed;">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
     <!-- <h2 class="inactive underlineHover"><a href="dashboard.php"> submit isuue  </a></h2> -->
     <h2 class="active">  check your issue </a></h2>
     <h2 class="inactive underlineHover"> <a href="#"> Pending request </a></h2>
     <h2 class="inactive underlineHover"> <a href="#">Pass Verification </a></h2>
     <h2 class="inactive underlineHover"><a href="#" target="blank">update_labour </a></h2>


    <!-- Icon -->
    <div class="fadeIn first">
      <h3>ADMIN DASHBOARD</h3>
    </div>


    <!-- Login Form -->
    <div class="container-fluid">
<div class="row">
<div class="col-sm-6">
<!-- electricity card  -->
<div class="card" id="card-shadow">
<div class="card-body">
<h4 class="card-title"><u>Electricity</u></h4>
 <table class="table table-striped">
    <thead>
      <tr>
      
        <th>Issue</th>
        <th>Issue status</th>
      </tr>
    </thead>
  
   <?php while($electricity_issue = $check->fetch_assoc()) { ?>
      <td>
        <a href="info.php?id=<?php echo $electricity_issue['issue_id']; ?>" >
          <?php echo $electricity_issue['subject']?>
        </a>
      </td>

      <td><?php echo $electricity_issue['status'];?></td>
      </tr>
    <?php }?>
    
  </table>
  <a href="all_issues.php?category=<?php echo "ELECTRICITY"?>"class="card-link" >Track more>></a></div>
</div>

</div>

<!-- electricitry close -->

<!-- water card -->
<div class="col-sm-6">
<div class="card" id="card-shadow">
<div class="card-body">
<h4 class="card-title"><u>Water</u></h4>
<table class="table table-striped">
    <thead>
      <tr>
      
        <th>Issue</th>
        <th>Issue status</th>
      </tr>
    </thead>
    <?php $water_issues_res = $result->fetch_all(MYSQLI_ASSOC);?>
    <?php foreach($water_issues_res as $water_issue) { ?>
      <td>
        <a href="info.php?id=<?php echo $water_issue['issue_id']; ?>" >
          <?php echo $water_issue['subject']?>
        </a>
      </td>

      <td><?php echo $water_issue['status'];?></td>
      </tr>
    <?php }?>
  
 
  </table>

<a href="all_issues.php?category=<?php echo "WATER"?>"class="card-link" >Track more>></a></div>
</div>

</div>
<!-- watre card close -->


<!-- Parking card  -->
<div class="col-sm-6">
<br><br>
<div class="card" id="card-shadow">
<div class="card-body">
<h4 class="card-title"><u>Parking</u></h4>
<table class="table table-striped">
    <thead>
      <tr>
      
        <th>Issue</th>
        <th>Issue status</th>
      </tr>
    </thead>

   <?php while($parking_issue = $result_parking->fetch_assoc()) { ?>
    
      <td>
        <a href="info.php?id=<?php echo $parking_issue['issue_id']; ?>" >
          <?php echo $parking_issue['subject']?>
        </a>
      </td>

      <td><?php echo $parking_issue['status'];?></td>
      </tr>
    <?php }?>
  
 
  </table>

<a href="all_issues.php?category=<?php echo "PARKING"?>"class="card-link" >Track more>></a></div>
</div>

</div>
<!-- parking card close -->
<!-- security card -->
<div class="col-sm-6">
<br><br>
<div class="card" id="card-shadow">
<div class="card-body">
<h4 class="card-title"><u>Security</u></h4>
<table class="table table-striped">
    <thead>
      <tr>
      
        <th>Issue</th>
        <th>Issue status</th>
      </tr>
    </thead>

   <?php while($security_issue = $result_security->fetch_assoc()) { ?>
    
      <td>
        <a href="info.php?id=<?php echo $security_issue['issue_id']; ?>" >
          <?php echo $security_issue['subject']?>
        </a>
      </td>

      <td><?php echo $security_issue['status'];?></td>
      </tr>
    <?php }?>
  
 
  </table>

<a href="all_issues.php?category=<?php echo "SECURITY"?>"class="card-link" >Track more>></a></div>
</div>

</div>
<!-- security card close -->
<!-- cleanliness card -->
<div class="col-sm-6">
<br><br>
<div class="card" id="card-shadow">
<div class="card-body">
<h4 class="card-title"><u>Cleanliness</u></h4>
<table class="table table-striped">
    <thead>
      <tr>
      
        <th>Issue</th>
        <th>Issue status</th>
      </tr>
    </thead>

   <?php while($clean_issue = $result_clean->fetch_assoc()) { ?>
    
      <td>
        <a href="info.php?id=<?php echo $clean_issue['issue_id']; ?>" >
          <?php echo $clean_issue['subject']?>
        </a>
      </td>

      <td><?php echo $clean_issue['status'];?></td>
      </tr>
    <?php }?>
  
 
  </table>

<a href="all_issues.php?category=<?php echo "CLEANLINESS"?>"class="card-link" >Track more>></a></div>
</div>

</div>
</div>

    <!-- Remind Passowrd -->
    <div id="formFooter">
 <b> Society Management services </b><br>
 <a href="#"><input type="button" value="Logout"></a>
    </div>

  </div>
</div>
</body>
</html>


