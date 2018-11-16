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
        <th>Issue created date</th>
        <th>Issue status</th>
        <th>Issue completed date</th>
      </tr>
    </thead>
<?php

class Connect {
    
    private $server = "localhost";
    private $user = "root";
    private  $password = "root";
    private  $dbname="form";
    private  $dbc;
    
    
   public function getconnection()  {
        $this->dbc = new mysqli($this->server,$this->user,$this->password,$this->dbname);
       return $this->dbc;
        
    }

}
$obj=new Connect();
$conn=$obj->getconnection();
$check = mysqli_query($conn, "SELECT * FROM issue");
?>

   <?php 
   while($array=mysqli_fetch_array($check))
   {
       $issueid=$array['issueid'];
       $issue_name=$array['issue_name'];
       $issue_date_start=$array['issue_start_date'];
       $status=$array['status'];
       $issue_end_date=$array['issue_end_date'];
       ?>
   <tr>
   <td><?php echo $issueid;?></td>
   <td><?php echo $issue_name;?></td>
   <td><?php echo $issue_date_start;?></td>
   <td><?php echo $status;?></td>
   <td><?php echo $issue_end_date;?></td>
   </tr>
<?php
   }
   ?>
      
    </tbody>
  </table>
</div>
  </div>
</div>
</body>
</html>


