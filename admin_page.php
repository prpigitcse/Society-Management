<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Society Management</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active"> update labour </h2>
    <h2 class="inactive underlineHover"><a href="https://royalsociety.org" target="blank">About </a></h2>
    <h2 class="inactive underlineHover"><a href="admin_dashboard.php" >Admin Dashboard </a></h2>




    <!-- Icon -->
    <div class="fadeIn first">
      <h3>WELCOME ADMIN</h3>
      <p>LIST OF ISSUES</p>
    </div>

    <!-- Login Form -->
    <form action="labour_msg.php" method="POST">

 <div>
 <button>EDIT</button>  <button>DELETE</button><br>
Issue Id:
<input type="text"  name="issue_id">
<br>
<div>Labour:
<select id="position" class="fadeIn first" name="labour" placeholder="labour" >
<option>--Select labour--</option>    
            <option value="harry">harry</option>
            <option value="bob">bob</option>
            <option value="mary">mary</option>
            <option value="sham">sham</option>
            <option value="rosy">rosy</option>     
     </select>
     <input type="submit" value="update" name="update">

</div>
     <br>
 </div>
 </form>
    <div>
<a href="admin_logout.php"><input type="button" value="Logout"></a>
</div>
    <!-- Remind Passowrd -->
</body>
</html>
<!-- <?php
include("connection.php");
if(isset($_POST['update'])){
$name=$_POST['labour'];
$id=$_POST['issue_id'];
 }
$obj->update($name,$id);
$info_issue=$obj->getinfo_labour($id);
$info=$info_issue->fetch_assoc();
$issue_id=$info['issue_id'];
$issue_subject=$info['subject'];
$issue_des=$info['issue'];

$labour_contact = $obj->labour($name);
$labour_info = $labour_contact->fetch_assoc();
$labour_number=$labour_info['labour_number'];
$mobile=  $labour_number;


//$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9481627975&Password=K4542A&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=mithu8GdpmJQV5K0z7rAqHvxlN3a") ,true);
//$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9916806095&Password=*******&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=akshaB8dZMHNhkRqD2OUfn4a") ,true);
// $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7829487050&Password=anush5397&Message=".urlencode($issue_id).urlencode($issue_subject).urlencode($issue_des)."&To=".urlencode($mobile)."&Key=anushno6GgpDxkAv9QiyB") ,true);
 $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9591318694&Password=sahanan@8&Message=".urlencode($issue_id).urlencode($issue_subject).urlencode($issue_des)."&To=".urlencode($mobile)."&Key=sahanma4EG9WDrYIyvTcOB1PJ8") ,true);

if ($json["status"]==="success") {
    // echo $json["msg"];
    echo "message sent";
    // header("Location: admin_page.php");
    //your code when send success
}else{
    echo "message not  sent";
    // echo $json["msg"];
    // header("Location: admin_page.php");
    //your code when not send
}
?> -->