<!DOCTYPE HTML>
<html>
<head>
<meta charset="UTF-8">
<title>contact</title>
</head>

<body>

<?php

$firstName = $_POST["fName"];
$lastName = $_POST["lName"];
$email = $_POST["email"];
$comment = $_POST["comments"];
$subject = "Be HINK! Tryout Application";

//Enter your email address
$to = "gforsyth@butler.edu";


//Prepare Email Body Text
	$Body = "";
	$Body .= "Name: ";
	$Body .= $firstName . ' ' . $lastName;
	$Body .= "\n";
	$Body .= "Email: ";
	$Body .= $email;
	$Body .= "\n";
	$Body .= "Comments: ";
	$Body .= $comment;
	$Body .= "\n";

//Send Email
$send_contact= mail($to,$subject,$Body);
if($send_contact) {
	print "<meta http-equiv=\"refresh\" content=\"0;URL=thanksHink.php\">";
}
?>



</body>
</html>
