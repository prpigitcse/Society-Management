<?php

require('database.php');
$obj = new Database;
$conn = $obj->getConnection();

$flag = 0;
$result = mysqli_query($conn,"SELECT * FROM User");
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/admin.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>

<script>

$(document).ready(function() {
   $("#approve").click(function() { 
    var id=$(this).data('id');
    alert(id);
  
     $.ajax({   
       type: "POST",
       url: "status.php",   
       data:   {
          id:id,
       },      
       success: function(response){                    
            // $("#hello").html(response);
        
            $status = response;
       }

   });
});
});

</script>

</head>
<body>
    <div class="container-fluid">
        <div class="col-xs-8">
            <h1>WELCOME</h1>
        </div>

        <div class="col-xs-4 text-center">
            <a href="logout.php">Logout</a>
        </div>

        <div class="row">
            <div class="col-xs-12 user-info">
                <!-- <table class="table table-bordered"> -->
                    <!-- <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Status</th>
                        <th>Action</th>
                    </tr> -->
               
                    <?php 

                        while($row = mysqli_fetch_array($result)) {
                            $name = $row['name'];
                            $email = $row['email'];
                            $status = $row['status'];
                    ?>
       
                   
                                <h3><?php echo $name; ?></h3>
                                   
                                <h3><?php echo $email; ?></h3>
                      
                                <h3><?php 
                                        if($status == "0")
                                        {
                                         echo 'Not Approved';  
                                        } 

                                        else
                                        {
                                            echo "Approved";
                                        }
                                    ?>
                                </h3>
                     
                                <?php 
                                    if($status == "0")
                                    {  
                                ?>
                                        <button type="button" name="approve" id="approve" data-id="<?php echo $email; ?>" style=" color:red ;">Approve</button>
                                <?php } ?>
            
                    <hr>
                
                    <?php 
                    }?>  <!-- Close while Loop -->

            </div>
        </div>
    </div>

    
</body>
</html>
