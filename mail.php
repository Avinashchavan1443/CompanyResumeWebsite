<?php

$ret=mail("hello45there@gmail.com","Hello","Hi there");
if($ret)
	echo "True";
else
	echo "False";
//print phpinfo();

/*$header = "From: hi45there@gmail.com\r\n"; 
$header.= "MIME-Version: 1.0\r\n"; 
$header.= "Content-Type: text/html; charset=ISO-8859-1\r\n"; 
$header.= "X-Priority: 1\r\n"; 

$status = mail("volcanoeserupt@gmail.com", "hi", "hello", $header);

if($status)
{ 
    echo '<p>Your mail has been sent!</p>';
} else { 
    echo '<p>Something went wrong, Please try again!</p>'; 
}

$subject = 'subject';
$message = 'message';
$to = 'volcanoeserupt@gmail.com';
$type = 'plain'; // or HTML
$charset = 'utf-8';

$mail     = 'no-reply@'.str_replace('www.', '', $_SERVER['SERVER_NAME']);
$uniqid   = md5(uniqid(time()));
$headers  = 'From: '.$mail."\n";
$headers .= 'Reply-to: '.$mail."\n";
$headers .= 'Return-Path: '.$mail."\n";
$headers .= 'Message-ID: <'.$uniqid.'@'.$_SERVER['SERVER_NAME'].">\n";
$headers .= 'MIME-Version: 1.0'."\n";
$headers .= 'Date: '.gmdate('D, d M Y H:i:s', time())."\n";
$headers .= 'X-Priority: 3'."\n";
$headers .= 'X-MSMail-Priority: Normal'."\n";
$headers .= 'Content-Type: multipart/mixed;boundary="----------'.$uniqid.'"'."\n";
$headers .= '------------'.$uniqid."\n";
$headers .= 'Content-type: text/'.$type.';charset='.$charset.''."\n";
$headers .= 'Content-transfer-encoding: 7bit';

mail($to, $subject, $message, $headers);

if(mail($to, $subject, $message, $headers))
	echo "Sent";
else
	echo "Not sent";*/

?>