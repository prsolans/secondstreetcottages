<?php

$name = $_POST['name']; 
$visitorEmail = $_POST['email']; 
$visitorPhone = $_POST['phone'];
$address1 = $_POST['address1'];
$address2 = $_POST['address2'];
$city = $_POST['city'];
$state = $_POST['state'];
$zip = $_POST['zip'];
$comments = $_POST['comments'];
$suite = $_POST['suite'];
$guests = $_POST['guests'];
$arrives = $_POST['arrives'];
$departs = $_POST['departs'];


/* SEND MESSAGE TO USER */


	$thankyousubject = "A message from Second Street Cottages";
	$smailbody= "\n".$name.",\n";
	$smailbody.="\nThank you for submitting your information to Second Street Cottages.\n\nWe will respond to your comments as soon as possible.\n\n\n\n\n\n\n\nPlease do not respond to this email. This is an automated email address used for sending notifications only, and is not checked for responses.\n";
	$smailbody.="\n-------------------------------------------------------\n";
	$smailbody.="\n".$author;
	$smailheaders="From: webform@secondstreetcottages.com";
	mail($visitorEmail, $thankyousubject, $smailbody, $smailheaders);
	


// given a specific recipient, the email to the internal contact is formatted and sent
  $headers = "MIME-Version: 1.0\r\n";
  $headers.= "Content-type: text/html; ";
  $headers.= "charset=iso-8859-1\r\n";
  $headers.= "From: webform@secondstreetcottages.com";

  $subject = "SecondStreetCottages.com Online Availability & Reservations Form";
  $body = "The following message was received through SecondStreetCottages.com's availability & reservations form:";
  $body.= "<br><br>Visitor information:";
  $body.= "<br><br><b>Name: </b> ".$name."";
  $body.= "<br><b>Email: </b> ".$visitorEmail."";
  $body.= "<br><b>Phone: </b> ".$visitorPhone."";
    $body.= "<br><br><b>Address1: </b> ".$address1."";
  $body.= "<br><b>Address2: </b> ".$address2."";
  $body.= "<br><b>City: </b> ".$city."";
      $body.= "<br><b>State: </b> ".$state."";
  $body.= "<br><b>Zip: </b> ".$zip."";
$body.= "<hr>";
    $body.= "<br><br><b>Suite Requested:</b> ".$suite."";
	  $body.= "<br><b># of Guests: </b> ".$guests."";
  $body.= "<br><b>Arrives: </b> ".$arrives."";
    $body.= "<br><b>Departs: </b> ".$departs."";
  $body.= "<br><br><b>Comments: </b>";
  $body.= "<br>".$comments."";

// set recipient for emails
$email2 = "ken@aqueductdevelopment.com";
$email = "kreichert@ameritech.net";
$email3 = "innkeeper@ashlandsblackswaninn.com";

mail($email2,$subject,$body,$headers);
mail($email3,$subject,$body,$headers);

$success = mail($email,$subject,$body,$headers);
if ($success){
header("Location: ../../thanks.php");
  }
 	
?>