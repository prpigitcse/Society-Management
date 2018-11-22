
<?php

include('database.php');
  
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
    <link rel="stylesheet" type="text/css" media="screen" href="css/style.css" />

    <script src="main.js"></script>
</head>
<body style="background-color:skyblue;">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover"> <a href="issue.php"> check your issue </a></h2>


   
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
<!-- <a href="electricity.php" class="card-link">Track more>></a> -->
<a href="all_issues.php?category=<?php echo "ELECTRICITY"?>"class="card-link" >Track more>></a>

</div>
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

<!-- <a href="water.php" class="card-link">Track more>></a> -->
<a href="all_issues.php?category=<?php echo "WATER"?>"class="card-link" >Track more>></a>

</div>
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

<!-- <a href="parking.php" class="card-link">Track more>></a> -->
<a href="all_issues.php?category=<?php echo "PARKING"?>"class="card-link" >Track more>></a>

</div>
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

<!-- <a href="security.php" class="card-link">Track more>></a> -->
<a href="all_issues.php?category=<?php echo "SECURITY"?>"class="card-link" >Track more>></a>

</div>
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

<!-- <a href="clean.php" class="card-link">Track more>></a> -->
<a href="all_issues.php?category=<?php echo "CLEANLINESS"?>"class="card-link" >Track more>></a>

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

