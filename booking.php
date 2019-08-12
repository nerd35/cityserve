<?php
if(isset( $_POST['fname']))
$fname = $_POST['fname'];
if(isset( $_POST['address']))
$address = $_POST['address'];
if(isset( $_POST['phone']))
$phone = $_POST['phone'];
if(isset( $_POST['email']))
$email = $_POST['email'];
if(isset( $_POST['sop']))
$sop = $_POST['sop'];
if(isset( $_POST['miniflat']))
$miniflat = $_POST['miniflat'];
if(isset( $_POST['payop']))
$payop = $_POST['payop'];
if(isset( $_POST['cleaningtext']))
$cleaningtext = $_POST['cleaningtext'];


$content="Client Name: $fname \n Address: $address \n Phone number: $phone \n Size of apartment: $sop \n Payment Option: $payop \n Cleaning Option: $miniflat \n Details: $cleaningtext";
$recipient = "subscribe@cityserve.com.ng";
$subject = "Booking";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $content, $mailheader) or die("Error!");

/* Redirect visitor to the thank you page */
header('Location: thanku.php');
exit();
?>