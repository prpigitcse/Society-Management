<?php
include("database.php");

$all=$show->all_issues($conn,'SECURITY');


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
</div>
  </div>
</div>
</body>
</html>


