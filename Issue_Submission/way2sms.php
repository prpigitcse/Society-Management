<?php
include("issue_submission.php");
session_start();
$mobile=$_POST['contactno'];
$message=$_POST['issue'];
$otp=$_POST['otp'];
$category=$_POST['position'];
$time=time();
$start_date=date("Y-m-d",$time);
// $user_name=$_SESSION['name'];

$subject=$_POST['subject'];
$form=array(
    'category'=>$category,
    // 'user_name'=>$user_name,
    'subject'=>$subject,
    'otp'=>$otp,
    'issue'=>$message,
    'start_date'=>$start_date
);
// print_r($form) or die;
$db->dbRowInsert('problem', $form); 

$cat = "issue catagory : ";
$sub ="\nissue subject : ";
$passcode = "\nissue otp : ";
$help = "\nsubmit this otp to labour after the work\n";

// $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9481627975&Password=K4542A&Message=".urlencode($cat).urlencode($category).urlencode($sub).urlencode($subject).urlencode($passcode).urlencode($otp).urlencode($help)."&To=".urlencode($mobile)."&Key=mithu8GdpmJQV5K0z7rAqHvxlN3a") ,true);
//$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9916806095&Password=*******&Message=".urlencode($cat).urlencode($category).urlencode($sub).urlencode($subject).urlencode($passcode).urlencode($otp).urlencode($help)."&To=".urlencode($mobile)."&Key=akshaB8dZMHNhkRqD2OUfn4a") ,true);
// $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7829487050&Password=anush5397&Message=".urlencode($cat).urlencode($category).urlencode($sub).urlencode($subject).urlencode($passcode).urlencode($otp).urlencode($help)."&To=".urlencode($mobile)."&Key=anushno6GgpDxkAv9QiyB") ,true);
 $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9591318694&Password=sahanan@8&Message=".urlencode($cat).urlencode($category).urlencode($sub).urlencode($subject).urlencode($passcode).urlencode($otp).urlencode($help)."&To=".urlencode($mobile)."&Key=sahanma4EG9WDrYIyvTcOB1PJ8") ,true);
if ($json["status"]==="success") {
    // echo $json["msg"];
    header("Location:dashboard.php");
    //your code when send success
}else{
    // echo $json["msg"];
     header("Location: index.php");
    //your code when not send
}

?>
