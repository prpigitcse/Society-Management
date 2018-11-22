<?php
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


$is_id = "issue id : ";
$is_sub = "issue subject : ";
$is_des = "issue description : ";

//$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9481627975&Password=K4542A&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=mithu8GdpmJQV5K0z7rAqHvxlN3a") ,true);
//$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9916806095&Password=*******&Message=".urlencode($message)."&To=".urlencode($mobile)."&Key=akshaB8dZMHNhkRqD2OUfn4a") ,true);
// $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7829487050&Password=anush5397&Message=".urlencode($issue_id).urlencode($issue_subject).urlencode($issue_des)."&To=".urlencode($mobile)."&Key=anushno6GgpDxkAv9QiyB") ,true);
$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9591318694&Password=sahanan@8&Message=".urlencode($is_id).urlencode($issue_id).urlencode($is_sub).urlencode($issue_subject).urlencode($is_des).urlencode($issue_des)."&To=".urlencode($mobile)."&Key=sahanma4EG9WDrYIyvTcOB1PJ8") ,true);

if ($json["status"]==="success") {
    // echo $json["msg"];
    // echo "message sent";
    header("Location: admin_page.php");
    //your code when send success
}else{
    echo "message not  sent";
    // echo $json["msg"];
    header("Location: admin_page.php");
    //your code when not send
}
?>