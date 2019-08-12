<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['time']))
$time = $_POST['time'];
if(isset( $_POST['message']))
$message = $_POST['message'];
if(isset( $_POST['selectservice']))
$selectservice = $_POST['selectservice'];

$content="Name of cleaner: $name \n date of cleaning: $time \n Services provided: $selectservice \n feedback: $message";
$subject = "client feedback";
$recipient = "feedback@cityserve.com.ng";
$mailheader = "From: $name \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");

/* Redirect visitor to the thank you page */
header('Location: thanku.php');
exit();
?>