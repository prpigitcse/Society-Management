<?php
include("connection.php");
$mobile=$_POST['contactno'];
$message=$_POST['issue'];
$otp=$_POST['otp'];
$category=$_POST['position'];
$t=time();
$start_date=date("Y-m-d",$t);
echo $start_date;

$subject=$_POST['subject'];
$form=array(
    'category'=>$category,
    'subject'=>$subject,
    'otp'=>$otp,
    'issue'=>$message,
    'start_date'=>$start_date
);
$obj->dbRowInsert('problem', $form);

$cat = "\nissue catagory : ";
$sub ="\nissue subject : ";
$desc ="\nissue description : ";
$passcode = "\nissue otp : ";
$help = "\n\nsubmit this otp to labour after the work\n";



//$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9481627975&Password=K4542A&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=mithu8GdpmJQV5K0z7rAqHvxlN3a") ,true);
//$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9916806095&Password=*******&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=akshaB8dZMHNhkRqD2OUfn4a") ,true);
// $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7829487050&Password=anush5397&Message=".urlencode($cat).urlencode($category).urlencode($sub).urlencode($subject).urlencode($desc).urlencode($message).urlencode($passcode).urlencode($otp).urlencode($help)."&To=".urlencode($mobile)."&Key=anushno6GgpDxkAv9QiyB") ,true);
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9591318694&Password=sahanan@8&Message=".urlencode($cat).urlencode($category).urlencode($sub).urlencode($subject).urlencode($desc).urlencode($message).urlencode($passcode).urlencode($otp).urlencode($help)."&To=".urlencode($mobile)."&Key=sahanma4EG9WDrYIyvTcOB1PJ8") ,true);
if ($json["status"]==="success") {
    // echo $json["msg"];
    header("Location: search issue.php");
    //your code when send success
}else{
    // echo $json["msg"];
    header("Location: dashboard.php");
    //your code when not send
}

?>