<?php

include('issue_track.php');
$id = null;
if ( !empty($_GET['id'])) {
    $id = $_GET['id'];
}

$info = $show->info($id);
$issue_details= $info->fetch_assoc();



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
  <div id="formContent" style="padding-left:50px;padding-right:50px;text-align:left;"><br>
  <pre>
  <h4>Issue Id           :     <?php echo $issue_details['issue_id'];?></h4>
  <h4>Issue name         :     <?php echo $issue_details['issue'];?></h4>
  <h4>Issue Status       :     <?php echo $issue_details['status'];?></h4>
  <h4>Issue start date   :     <?php echo $issue_details['start_date'];?></h4>
  <h4>Issue end date     :     <?php echo $issue_details['end_date'];?></h4>
  <h4>Labour name        :     <?php echo $issue_details['labour_name'];?></h4>
</pre>
<div><a href="admin_dashboard.php"><button class="btn btn-primary">Back to home page</button></a>
</div>
    <!-- Tabs Titles -->

    <div id="formFooter">
 <b> specbee consulting services </b>
    </div>

  </div>
</div>
</body>
</html>