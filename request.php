<?php
if(isset( $_POST['name']))
$name = $_POST['name'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['services']))
$services = $_POST['services'];

if(isset( $_POST['servicemsg']))
$servicemsg = $_POST['servicemsg'];

$content="From: $name \n Email: $email \n Telephone: $phone \n Services: $services \n Message: $servicemsg";
$subject = "Request a quote";
$recipient = "subscribe@cityserve.com.ng";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");


/* Redirect visitor to the thank you page */
header('Location: thanku.php');
exit();
?>