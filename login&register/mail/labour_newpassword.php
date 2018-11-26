<html>
<head>
    <title>forgetpassword</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/forgetpassword.css" />
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <link href="css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body style="background-image: url('images/background.jpeg');
  background-repeat: no-repeat;
	background-position: center;
	background-size: cover;
	background-attachment: fixed;">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <div class="form-gap"> </div>
   <div class="container" >
       <div class="row">
           <div class="col-md-4 col-md-offset-4">
               <div class="panel panel-default fadeInDown"  style="border-radius: 10px 10px 10px 10px;">
                 <div class="panel-body">
                   <div class="text-center">
                     <h3><i class="fa fa-lock fa-4x"></i></h3>
                     <h2 class="text-center">New Password</h2>
                     <p>You can enter your new password here.</p>
                     <div class="panel-body">
       
                       <form id="register-form" role="form" autocomplete="off" class="form" method="post" action="reset.html"> 
       
                         <div class="form-group">
                           <div class="input-group">
                             <span class="input-group-addon"><i class="fa fa-lock fa-2x color-blue"></i></span>
                             <input id="newpassword" name="newpassword" placeholder="new password" class="form-control"  type="password">
                             <input id="newcpassword" name="newcpassword" placeholder="retype new password" class="form-control"  type="password">

                           
                           
                            </div>
                         </div>
                         <div class="form-group">
                           <input name="recover-submit" class="btn btn-lg btn-primary btn-block" value="Reset Password" type="submit">
                         </div>
                         
                         <input type="hidden" class="hide" name="token" id="token" value=""> 
                       </form>
       
                     </div>
                   </div>
                 </div>
               </div>
             </div>
       </div>
   </div>
</body>

</html>





