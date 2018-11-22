<?php
require('db.php');

$var = new Database;
$conn = $var->getConnection();

$flag = 0;
$result = mysqli_query($conn,"SELECT * FROM user_request");

?>

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script>
    

$(document).ready(function() { 
   $(".approve").click(function() { 
    var id=$(this).data('id');
    alert(id);
     $.ajax({   
       type: "POST", 
       url: "status.php",   
       data:   {
          id:id,
       },      
       success: function(response){                    
            $status = response;
            if($status){ // if true (1)
      setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 0); 
   }

       }
   });
});

 $(".delete").click(function() { 

     var id=$(this).data('id');
    alert(id);
       $.ajax({   
         type: "POST", 
     url: "delete.php",   
        data:   {
           id:id,
        },      
       success: function(response){ 
        setTimeout(function(){// wait for 5 secs(2)
           location.reload(); // then reload the page.(3)
      }, 0); 
                             
       }

}); 
});

});
    
    </script>


</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
     <h2 class="inactive underlineHover"><a href="admin_dashboard.php">   check your issue </a></h2>
     <h2 class="active"> Pending request </a></h2>
     <h2 class="inactive underlineHover"><a href="pass_request.php"> Pass request </a></h2>


    <!-- Icon -->
    <div class="fadeIn first">
      <h3>ADMIN DASHBOARD</h3>
      <p>List of pending request</p>
    </div>



    <!-- Login Form -->
    <?php 

         while($row = mysqli_fetch_array($result)) {
             $name = $row['name'];
             $email = $row['email'];
             $adhar = $row['adhar'];
             $contact = $row['contact'];
             $status = $row['status'];

        if($status == "0")
        {  
             echo $name."<br>";
             echo $email."<br>";
             echo $adhar."<br>";
             echo $contact."<br>";
             
        ?>

            <button type="button" class="approve" name="approve" id="approve" data-id="<?php echo $email; ?>">Approve</button>
            <button type="button" class="delete" name="delete" id="delete" data-id="<?php echo $email; ?>">Delete</button>

            <?php   
        }
        
        ?>


<?php
}
        ?>


    <!-- Remind Passowrd -->
    <div id="formFooter">
 <b> Society Management services </b><br>
 <a href="admin_logout.php"><input type="button" value="Logout"></a>
    </div>

  </div>
</div>
</body>
</html>


