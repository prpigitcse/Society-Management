<?php

include('issue_track.php');
$category = null;
if ( !empty($_GET['category'])) {
    $category = $_GET['category'];
}

$all=$show->all_issues($category);

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
<body style="background-image: url('images/background.jpeg');
  background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	background-attachment: fixed;">
<div class="wrapper fadeInDown">
  <div id="formContent"style="padding-bottom:20px;">
    <!-- Tabs Titles -->
    <h2 class="inactive underlineHover"> <a href="issue_tracking.php"> check your issue </a></h2>


    <!-- Icon -->
    <table class="table table-striped">
    <thead>
      <tr>
        <th>Issue Id</th>
        <th>Issue</th>
        <th>Issue status</th>
     
      </tr>

      <?php while($electricity_issue = $all->fetch_assoc()) { ?>
       
        <td><?php echo $electricity_issue['issue_id'];?></td>

      <td>
        <a href="info.php?id=<?php echo $electricity_issue['issue_id']; ?>" >
          <?php echo $electricity_issue['subject']?>
        </a>
      </td>

      <td><?php echo $electricity_issue['status'];?></td>
      </tr>
    <?php }?>
    </thead>

      
    </tbody>
  </table>
  <div><a href="admin_dashboard.php"><button class="btn btn-primary">Back to Dashboard</button></a>

</div>
  </div>
  
</div>
</body>
</html>