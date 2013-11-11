<?php
include("Configuration.php");
/* Mail Header */
$headers  = 'MIME-Version: 1.0' . "\r\n";
$headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
$headers .= 'To: '.TO_NAME.' <'.TO_EMAIL.'>' . "\r\n";

$mode=$_GET["mode"];
switch($mode) {
	case "invite":
		$name		=	stripslashes($_POST["name"]);
		$email		=	stripslashes($_POST["email"]);
		$yourself	=	stripslashes($_POST["yourself"]);
		
		$msg  = "From : $name \r\n";  
		$msg .= "e-Mail : $email \r\n";  
		$msg .= "Yourself : $yourself\r\n"; 
		$msg .= "---User information--- \r\n"; //Title
		$msg .= "User IP : ".$_SERVER["REMOTE_ADDR"]."\r\n"; //Sender's IP
		$msg .= "Browser info : ".$_SERVER["HTTP_USER_AGENT"]."\r\n"; //User agent
		$msg .= "User come from : ".$_SERVER["HTTP_REFERER"]; //Referrer
		
		if  (mail(TO_EMAIL, MAIL_SUBJECT, $msg,$headers)) {
			echo "1";	
		} else {
			echo "0";	
		}
	break;
	
	case "subscribe":
		$subscriberemail	=	$_POST["subscriberemail"];
		
		$msg  = "Subscriber Email : $subscriberemail\r\n";  
		$msg .= "---User information--- \r\n"; //Title
		$msg .= "User IP : ".$_SERVER["REMOTE_ADDR"]."\r\n"; //Sender's IP
		$msg .= "Browser info : ".$_SERVER["HTTP_USER_AGENT"]."\r\n"; //User agent
		$msg .= "User come from : ".$_SERVER["HTTP_REFERER"]; //Referrer
		
		if  (mail(TO_EMAIL, MAIL_SUBJECT, $msg,$headers)) {
			echo "1";	
		} else {
			echo "0";	
		}
		
	break;
}
?>