
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>specbee</title>
    <link rel="shortcut icon" type="image/png" href="images/favicon.ico"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="css/index.css" />
    <script src="main.js"></script>
</head>
<body>
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->
    <h2 class="active">labour section</h2>
    

    <!-- Icon -->


    <!-- Login Form -->
    <form action="#" method="POST" >
    <select id="position" class="fadeIn first"  name="position" placeholder="Position" >
            <option>ELECTRICITY</option>
            <option>WATER</option>
            <option>PARKING</option>
            <option>CLEANLINESS</option>
            <option>SECURITY</option>      
     </select>
    <!-- <input type="text" id="subject" class="fadeIn second"  required="required" name="subject" placeholder="subject"> -->
    <!-- <input type="date" id="subject" class="fadeIn second"  required="required" name="sdate" placeholder="start date"> -->
    <select id="position" class="fadeIn first" name="labour" placeholder="labour" >
            <option value="harry">harry</option>
            <option value="bob">bob</option>
            <option value="mary">mary</option>
            <option value="sham">sham</option>
            <option value="rosy">rosy</option>     
     </select>
    <input type="date" id="subject" class="fadeIn second"  required="required" name="edate" placeholder="end date">
    <input type="text" id="subject" class="fadeIn second"  required="required" name="otp" placeholder="otp">

      <input type="submit" class="fadeIn fourth" value="submit" name="issue_submit">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
 <b> Society Management services </b><br>

<a href="labour_logout.php"><input type="button" value="Logout"></a>

    </div>

  </div>
</div>
</body>
</html>
<?php
include("labour_db.php");
if(isset($_POST['issue_submit'])){
$status='close';
$end_date=$_POST['edate'];
$otp=$_POST['otp'];
$labour->update_labour($status,$end_date,$otp);




$name=$_POST['labour'];
$labour_contact = $labour->labour($name);
$labour_info = $labour_contact->fetch_assoc();
$labour_number=$labour_info['labour_number'];
$mobile=  $labour_number;
$sta = "\n status :";
$e_date ="\n issue completed on : ";
$use_otp="\n using this otp : ";

//$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9481627975&Password=K4542A&Message=".urlencode($sta).urlencode($status).urlencode($e_date).urlencode($end_date).urlencode($use_otp).urlencode($otp)."&To=".urlencode($mobile)."&Key=mithu8GdpmJQV5K0z7rAqHvxlN3a") ,true);
//$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9916806095&Password=*******&Message=".urlencode($sta).urlencode($status).urlencode($e_date).urlencode($end_date).urlencode($use_otp).urlencode($otp)."&Key=akshaB8dZMHNhkRqD2OUfn4a") ,true);
 $json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=7829487050&Password=anush5397&Message=".urlencode($sta).urlencode($status).urlencode($e_date).urlencode($end_date).urlencode($use_otp).urlencode($otp)."&Key=anushno6GgpDxkAv9QiyB") ,true);
//$json = json_decode(file_get_contents("https://smsapi.engineeringtgr.com/send/?Mobile=9591318694&Password=sahanan@8&Message=".urlencode($sta).urlencode($status).urlencode($e_date).urlencode($end_date).urlencode($use_otp).urlencode($otp)."&To=".urlencode($mobile)."&Key=sahanma4EG9WDrYIyvTcOB1PJ8") ,true);

if ($json["status"]==="success") {
     echo $json["msg"];
    // echo "message sent";
    // header("Location: admin_page.php");
    //your code when send success
}
 else{
    // echo "message not  sent";
     echo $json["msg"];
    // header("Location: admin_page.php");
    //your code when not send
}

}
?>


































<!-- way 2 sms -->

<!-- <?php
//post
// $url="www.way2sms.com/api/v1/sendCampaign";
// $curl = curl_init();
// curl_setopt($curl, CURLOPT_POST, 1);// set post data to true
// curl_setopt($curl, CURLOPT_POSTFIELDS, "apikey=[5CD26J7VRVZKL4N0873UJP7F0R5QKZXK]&secret=[WUCPG2AF296ON616]&usetype=[stage]&phone=[+917829487050]&senderid=[anush@specbee.com]&message=[hello anush]");// post data
// // query parameter values must be given without squarebrackets.
//  // Optional Authentication:
// curl_setopt($curl, CURLOPT_HTTPAUTH, CURLAUTH_BASIC);
// curl_setopt($curl, CURLOPT_URL, $url);
// curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
// $result = curl_exec($curl);
// curl_close($curl);
// echo $result;
?> -->



    
    


<!-- text local -->

 <!-- <?php
//  if(isset($_POST['contactno'])){

// 	// Authorisation details.
// 	$username = "anush@specbee.com";
// 	$hash = "0a5a549004dd4d32947cf2007c4f813b79f92ac2ce028adc5ac0d268c1c31a11";

// 	// Config variables. Consult http://api.textlocal.in/docs for more info.
// 	$test = "1";

// 	// Data for text message. This is the text message data.
//   $sender = "Royal_Society"; // This is who the message appears to be from.
//   // $problem = $_POST['position'];
//   $numbers = $_POST['contactno']; // A single number or a comma-seperated list of numbers
// // $subject =$_POST['subject'];
//   $message = $_POST['issue'];// 612 chars or less
// 	// A single number or a comma-seperated list of numbers
// 	$message = urlencode($message);
// 	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
// 	$ch = curl_init('http://api.textlocal.in/send/?');
// 	curl_setopt($ch, CURLOPT_POST, true);
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//   $result = curl_exec($ch); // This is the result from the API
//   if($result==true){
//     echo "message sent";
//   }
//   curl_close($ch);
// }
// ?>

<?php
// if(isset($_POST['contactno'])){
// 	// Account details
// 	$apiKey = urlencode('wkbZmo86W1E-2CCNEkJpU55A3eBzbsepZf8wXxese2');
	
// 	// Message details
// 	$numbers = $_POST['contactno'];
// 	$sender = "Royal society";
// 	$message = $_POST['issue'];
 
 
// 	// Prepare data for POST request
// 	$data = array('apikey' => $apiKey, 'numbers' => $numbers, "sender" => $sender, "message" => $message);
 
// 	// Send the POST request with cURL
// 	$ch = curl_init('https://api.textlocal.in/send/');
// 	curl_setopt($ch, CURLOPT_POST, true);
// 	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// 	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
//   $response = curl_exec($ch);
//   if ($response==true){
//     echo "msg sent";
//   }
// 	curl_close($ch);
	
// 	// Process your response here
//   echo $response;
// }
?> -->





